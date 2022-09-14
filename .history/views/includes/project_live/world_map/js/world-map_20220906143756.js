    const world_map_scale_axises_width = 900;
    const world_map_scale_axises_height = 600;

    const world_map_svg = d3.select('.svg-container').append('svg')
    .attr("viewBox", "0 0 "+barchart_scale_axis_width+" "+barchart_scale_axis_height)
        .classed("svg-content", true)
        .style("font-family", "Bradley Hand,  Arial, Helvetica, sans-serif")
    .attr('width', world_map_scale_axises_width).attr('height', world_map_scale_axises_height);

    const world_map_projection = d3.geoNaturalEarth1().scale(140)
        /* .translate([width / 2, height / 1.4]) */
        ;
    const world_map_pathGenerator = d3.geoPath(world_map_projection);

    const g_main_world_map = world_map_svg.append('g');

    g_main_world_map.append("text")
            .attr('class', 'the-title')
            .attr(
              "transform", "translate(400, 30)"
            )
            .text("Interactive World Map");
    g_main_world_map.append('path')
            .attr('class', 'sphere')
            .attr('d', pathGenerator({type: 'Sphere'}));
    const world_map_zoom = d3.zoom()
      .scaleExtent([1, 8])
      .on("zoom", world_map_zoomed);

    world_map_svg.call(world_map_zoom);
    function world_map_zoomed(event) {
    const {transform} = event;
    g_main_world_map.attr("transform", transform);
    g_main_world_map.attr("stroke-width", 1 / transform.k);
  }
    d3.json('https://cdn.jsdelivr.net/npm/world-atlas@2.0.2/countries-50m.json')
        .then(data => {
            const world_map_countries = topojson.feature(data, data.objects.world_map_countries);
            g_main_world_map.selectAll('path')
            .data(world_map_countries.features)
            .enter()
            .append('path')
              .attr('class', 'country')
              .attr('d', world_map_pathGenerator)
            .append('title')
              .text(d => d.properties.name);
            // console.log(countries);
    });
    g_main_world_map.append("text")
            .attr('class', 'the-title')
            .attr(
              "transform", "translate(300, 500)"
            )
            .text("Design and Programmed by Bader Binsunbil Version 1.0.0");