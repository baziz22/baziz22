    const world_map_scale_axises_width = 900;
    const world_map_scale_axises_height = 600;

    const svg = d3.select('body').append('svg').attr('width', world_map_scale_axises_width).attr('height', world_map_scale_axises_height);

    const world_map_projection = d3.geoNaturalEarth1().scale(140)
        /* .translate([width / 2, height / 1.4]) */
        ;
    const world_map_pathGenerator = d3.geoPath(world_map_projection);

    const g = svg.append('g');

    g.append("text")
            .attr('class', 'the-title')
            .attr(
              "transform", "translate(400, 30)"
            )
            .text("Interactive World Map");
    g.append('path')
            .attr('class', 'sphere')
            .attr('d', pathGenerator({type: 'Sphere'}));
    const zoom = d3.zoom()
      .scaleExtent([1, 8])
      .on("zoom", zoomed);

    svg.call(zoom);
    function zoomed(event) {
    const {transform} = event;
    g.attr("transform", transform);
    g.attr("stroke-width", 1 / transform.k);
  }
    d3.json('https://cdn.jsdelivr.net/npm/world-atlas@2.0.2/countries-50m.json')
        .then(data => {
            const countries = topojson.feature(data, data.objects.countries);
            g.selectAll('path')
            .data(countries.features)
            .enter()
            .append('path')
              .attr('class', 'country')
              .attr('d', pathGenerator)
            .append('title')
              .text(d => d.properties.name);
            // console.log(countries);
    });
    g.append("text")
            .attr('class', 'the-title')
            .attr(
              "transform", "translate(300, 500)"
            )
            .text("Design and Programmed by Bader Binsunbil Version 1.0.0");