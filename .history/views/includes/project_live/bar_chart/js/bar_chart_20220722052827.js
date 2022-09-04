let barchart_scale_axis_width = 600;
let barchart_scale_axis_height = 500;
let dataset;
let barColor = d3.interpolateInferno(0.45);

let barchart_graph = d3
.select(".svg-container")
.append("svg")
.attr("preserveAspectRatio", "xMinYMin meet")
.attr("viewBox", "0 0 "+barchart_scale_axis_width+" "+barchart_scale_axis_height)
.classed("svg-content", true)
.style("font-family", "Bradley Hand,  Arial, Helvetica, sans-serif")

/* Initialize tooltip */
//let tip = d3.tip().attr('class', 'd3-tip').html((EVENT,d)=> d );


let tip = d3.tip()
.attr('class', 'd3-tip')
    .offset([0, 0])
    .html(function(event, d) {
        return "<span style='color:red'>" + d + "</span>";
    })

let g_main_barchart = barchart_graph
    .append("g")
    .attr("id", "g-main-barchar-scale-axis")
    .attr("transform", "translate(" + 100 + "," + 20 + ")");
    /* Invoke the tip in the context of your visualization */
    g_main_barchart.call(tip);
let gXaxis = g_main_barchart
    .append("g")
    .attr("id", "gXaxis")
let gYaxis = g_main_barchart
    .append("g")
    .attr("id", "gYaxis");
let g_rect = g_main_barchart.append("g")
    .attr("id", "g_rect_bar");

let barchartXscale = d3.scaleBand()
    .range([0, barchart_scale_axis_width - 150 ])
    .padding(0.2)

let barchartYscale = d3.scaleLinear()
    .range([barchart_scale_axis_height - 120, 30 ])



function loadData(){
    
}

d3.csv("views/includes/project_live/bar_chart/data/XYZ.csv").then((d) => {
    dataset = d;
    console.log("dataset", dataset);
    dataset.forEach(function(d,i){
        d.order = i;
    });
    
    createBarChart();
});

function createBarChart(){
    
        barchartXscale.domain(dataset.map((data) => data.year));
        gXaxis.attr("transform", "translate(0," + (barchart_scale_axis_height - 120) + ")")
        .call(d3.axisBottom(barchartXscale))
        .append("text")
        .attr("text-anchor", "end")
        .text("Years")
        .attr("font-size", "24px")
        .style("font-family", "Bradley Hand,  Arial, Helvetica, sans-serif")
        .attr("fill", "black")
        .attr("transform", "translate("+barchart_scale_axis_width/2.4 +",40)");

        barchartYscale.domain([0,d3.max(dataset,(data) => data.value)])
        gYaxis
        .call(d3.axisLeft(barchartYscale).tickFormat(function(d){
            return "$"+ d;
            //return d3.format(".0%") + d;
        }).ticks(20))
        .append("text")
        .attr("x", barchart_scale_axis_height * -1 / 3)
        .attr("y", "0")
        .attr("dy", "-2.1em")
        .attr("text-anchor", "end")
        .text("Price")
        .attr("font-size", "24px")
        .style("font-family", "Bradley Hand,  Arial, Helvetica, sans-serif")
        .attr("fill", "black")
        .attr("transform", "rotate(-90)");
        
        g_rect.selectAll(".bar")
            .data(dataset)
            .enter()
            .append("rect")
            .classed("bar", true)
            .on("mouseover", barMouseOver)
            .on("mouseout", barMouseOut)
            .attr("x", (d) => barchartXscale(d.year))
            .attr("y", barchart_scale_axis_height - 120)
            .attr("width", barchartXscale.bandwidth())
            .attr("rx", "5")
            .transition()
            .ease(d3.easeBounce)
            .duration(1500)
            .delay(function (d, i) {
                return i * 100;
            })
            .attr("y", (d) => barchartYscale(d.value))
            .attr("height", (d) => barchart_scale_axis_height - barchartYscale(d.value) - 120)
            .attr("fill", d => { 
                return (d.value === d3.max(dataset,  d => d.value)) 
                ? "orange" : barColor})
           ;
        d3.selectAll(".bar").append("title")
        .text((d, i) => "Column: "+(i+1)+ " --> "+ d.value);
        g_rect.selectAll("text")
            .data(dataset)
            .enter().append("text")
            .transition()
            .duration(400)
            .ease(d3.easeLinear)
            .delay(2000)
            .attr("x", (d) => barchartXscale(d.year)+33)
            .attr("y", (d) => barchartYscale(d.value) -18)
            .attr("dy", "0.71em")
            .attr("text-anchor", "end")
            .text( (d) => '$' + d.value)
            .attr("font-size", "16px")
            .attr("opacity",1)
            
        function barMouseOver(event, d){
            const element = d3.select(this)
            .transition()
            .duration(400)
            .ease(d3.easeLinear)
            .attr("stroke", "black")
            .attr("stroke-width", 3)
            .attr("opacity",0.5)
            .attr('width', barchartXscale.bandwidth() + 5)    
            tip.show(event, theValues() 
                ,
                element.node())
                function theValues(){
                    return `
                    <span class="tooltip-col-1" style='color:purple'><strong>Value: </strong></span>
                    <span class="tooltip-col-2" style='color:green'> ${"$"+d.value} </span> <br>
                    <span class="tooltip-col-1" style='color:purple'><strong>Year: </strong></span>
                    <span class="tooltip-col-2" style='color:green'> ${d.year} </span> <br>
                    <span class="tooltip-col-1" style='color:purple'><strong>Rank: </strong></span>
                    <span class="tooltip-col-2" style='color:green'> ${d.order+1} </span> <br>
                    Bader Binsunbil
                    `
                }
        }
        function barMouseOut() {
            d3.select(this)
            .transition()
            .duration(400)
            .ease(d3.easeLinear)
            .attr("stroke-width", 0)
            .attr("opacity",1)
            .attr('width', barchartXscale.bandwidth())
            tip.hide()
        }
        const yGridlines = d3.axisLeft()
            .scale(barchartYscale)
            .ticks(5)
            .tickSize(-width,0,0)
            .tickFormat('')

            g_main_barchart.append('g')
            .call(yGridlines)
            .classed('gridline', true);
}      

// Add Label to the Chart
g_main_barchart.append("text")
    .attr("transform", "translate(100,0)")
    .attr("x", "0")
    .attr("y", "0")
    .text("Dunkin Donuts Stock Price")
    .style("font-size", "24")