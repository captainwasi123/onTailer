@extends('admin.includes.master')
@section('title', 'Dashboard')
@section('content')
	
	<div class="main-content">
        <div class="block-element m-b-30">
           <div class="row">
              <div class="col-md-3 co-lg-3 col-sm-6 col-12">
                 <div class="dash-box">
                    <div class="dash-left">
                       <h4> 50 </h4>
                       <h5> Customers </h5>
                    </div>
                    <div class="dash-right">
                       <img src="{{URL::to('/public/admin')}}/images/dash-icon1.png">   
                    </div>
                    <div class="dash-progress progress-1">
                       <div class="progress" style="height: 10px;">
                          <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-3 co-lg-3 col-sm-6 col-12">
                 <div class="dash-box">
                    <div class="dash-left">
                       <h4> 47 </h4>
                       <h5> Stock </h5>
                    </div>
                    <div class="dash-right">
                       <img src="{{URL::to('/public/admin')}}/images/dash-icon2.png">   
                    </div>
                    <div class="dash-progress progress-2">
                       <div class="progress" style="height: 10px;">
                          <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-3 co-lg-3 col-sm-6 col-12">
                 <div class="dash-box">
                    <div class="dash-left">
                       <h4> 60 </h4>
                       <h5> Orders </h5>
                    </div>
                    <div class="dash-right">
                       <img src="{{URL::to('/public/admin')}}/images/dash-icon3.png">   
                    </div>
                    <div class="dash-progress progress-3">
                       <div class="progress" style="height: 10px;">
                          <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-3 co-lg-3 col-sm-6 col-12">
                 <div class="dash-box">
                    <div class="dash-left">
                       <h4> 100 </h4>
                       <h5> Visitors </h5>
                    </div>
                    <div class="dash-right">
                       <img src="{{URL::to('/public/admin')}}/images/dash-icon4.png">   
                    </div>
                    <div class="dash-progress progress-4">
                       <div class="progress" style="height: 10px;">
                          <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="block-element m-b-30">
           <div class="row equal-cols">
              <div class="col-md-4 col-lg-4 col-sm-12 col-12">
                 <div class="chart-1">
                    <div class="chart-head">
                       <h3> Total Sales </h3>
                       <select>
                          <option> This Week </option>
                          <option> This Week </option>
                          <option> This Week </option>
                       </select>
                    </div>
                    <div class="chart-wrapper">
                       <div class="pie-chart-main">
                          <span class="sale-price"> Rs,123,456 </span>
                          <div class="pie-chart">
                             <canvas id="myChart"></canvas>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-md-8 col-lg-8 col-sm-12 col-12">
                 <div class="chart-1">
                    <div class="chart-head">
                       <h3> Total Profit </h3>
                       <select>
                          <option> This Week </option>
                          <option> This Week </option>
                          <option> This Week </option>
                       </select>
                    </div>
                    <div class="chart-wrapper">
                       <div class="graph-container">
                          <svg></svg>
                          <div class="tooltip"></div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="content-border">
           <div class="page-heading">
              <h3> Recent Orders </h3>
           </div>
           <div class="custom-pad1 m-b-30">
              <div class="row">
                 <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                    <select class="filter-btn1 m-b-20">
                       <option> Show All </option>
                       <option> Show All </option>
                       <option> Show All </option>
                       <option> Show All </option>
                    </select>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                    <div class="search-form m-b-20">
                       <form>
                          <input type="text" placeholder="Search" name="">  
                          <button> <i class="fa fa-search"> </i> </button>
                       </form>
                    </div>
                 </div>
              </div>
              <div class="block-element m-b-30">
                 <div class="table-wrapper">
                    <table>
                       <thead>
                          <tr>
                             <th class="tab-text5"> Product Id </th>
                             <th class="tab-text5"> Product Name </th>
                             <th class="tab-text5"> Image </th>
                             <th class="tab-text5"> Customer Name </th>
                             <th class="tab-text5"> Quantity </th>
                             <th class="tab-text5"> Price </th>
                             <th class="tab-text5"> Date </th>
                             <th class="tab-text5"> Status  </th>
                             <th class="tab-text5"> Order Id </th>
                             <th class="tab-text5 text-center"> View Order Details </th>
                             <th class="tab-text5 text-center"> Action </th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <td class="tab-text4"> 123 </td>
                             <td class="tab-text4"> Customize Shirt </td>
                             <td class="tab-text4 tab-img1"> <img src="{{URL::to('/public/admin')}}/images/avatar-2.jpg"> </td>
                             <td class="tab-text4"> Xyz </td>
                             <td class="tab-text4"> 1 </td>
                             <td class="tab-text4"> 1234/- </td>
                             <td class="tab-text4"> 5/11/2020 </td>
                             <td class="tab-text4 col-green"> Delivered </td>
                             <td class="tab-text4"> 12345332 </td>
                             <td class="tab-text4 text-center">
                                <div class="dropdown dropdown-3">
                                   <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="fa fa-eye"> </i>
                                   </button>
                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="{{URL::to('/public/admin')}}/#"> View Customizations </a>
                                      <a class="dropdown-item" href="{{URL::to('/public/admin')}}/#"> View Measurements </a>
                                      <a class="dropdown-item" href="{{URL::to('/public/admin')}}/#"> View Shipping Address </a>
                                   </div>
                                </div>
                             </td>
                             <td class="text-center tab-text4">  <a href="{{URL::to('/public/admin')}}/" class="del-icon"> <i class="fa fa-trash"> </i> </a> </td>
                          </tr>
                          <tr>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4">  </td>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4 ">   </td>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4 ">    </td>
                             <td class="tab-text4">   </td>
                          </tr>
                          <tr>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4">  </td>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4 ">   </td>
                             <td class="tab-text4">   </td>
                             <td class="tab-text4 ">    </td>
                             <td class="tab-text4">   </td>
                          </tr>
                       </tbody>
                    </table>
                 </div>
              </div>
           </div>
        </div>
     </div>

@endsection
@section('addScript')
<script type="text/javascript">
     // Function to create random data in format: [date, amount]
     function createData(num) {
       let data = [];
       for (var i = 0; i < num; i++) {
          const randomNum = Math.floor(Math.random() * 1000 + 1);
          let d = new Date();
          d.setDate(d.getDate() - (i * 30));
          data.push({
             date: d,
             amount: randomNum
          });
       }
       
       return data;
     }
     
     // Create + Format data
     let data = createData(12).sort(function(a, b) { return a.date - b.date; });
     
     // what are these and are they things that someone should edit
     const margin = { top: 30, right: 20, bottom: 60, left: 65 };
     const width = 800 - (margin.left + margin.right);
     const height = 300 - (margin.top + margin.bottom);
     const labelOffset = 50;
     const axisOffset = 16;
     
     // Set Time Format (JAN, FEB, etc..)
     const timeFormat = d3.timeFormat('%b');
     
     // Set the scales
     const x = d3.scaleBand()
       .rangeRound([0, width])
       .domain(data.map((d) => d.date))
       .padding(0.5);
     
     const y = d3.scaleLinear()
       .range([height, 0])
       .domain([0, d3.max(data, (d) => d.amount)]);
     
     // // Set the axes
     const xAxis = d3.axisBottom()
       .scale(x)
       .tickSize(0)
       .tickFormat(timeFormat)
     
     const yAxis = d3.axisLeft()
       .ticks(4) 
       .tickSize(-width)
       .scale(y.nice());
     
     // // Set up SVG with initial transform to avoid repeat positioning
     const svg = d3.select('svg')
          .attr('class', 'graph')
          .attr('width', width + (margin.left + margin.right))
          .attr('height', height + (margin.top + margin.bottom))
          .append('g')
          .attr('class', 'group-container')
          .attr('transform', `translate(${margin.left}, ${margin.top})`)
          .attr('font-family', 'ibm-plex-sans');
     
     // // Add Y axis
     svg.append('g')
       .attr('class', 'axis y')
       .attr('stroke-dasharray', '4')
       .call(yAxis)
       .selectAll('text')
       .attr("x", -axisOffset)
       .attr('font-family', 'ibm-plex-sans');
     
     // // Add Y axis label
     const yLabel = svg.select('.y')
       .append('text')
       .text('USAGE ($)')
       .attr('class', 'label')
       .attr('transform', `translate(${-labelOffset}, ${height / 2}) rotate(-90)`)
       .attr('font-family', 'ibm-plex-sans');
     
     // // Add X axis
     svg.append('g')
       .attr('class', 'axis x')
       .attr('transform', `translate(0, ${height})`)
       .call(xAxis)
       .selectAll('text')
       .attr("y", axisOffset)
       .attr('font-family', 'ibm-plex-sans')
     
     // // Add X axis label
     const xLabel = svg.select('.x')
       .append('text')
       .text('MONTH')
       .attr('class', 'label')
       .attr('transform', `translate(${width / 2}, ${labelOffset})`)
       .attr('font-family', 'ibm-plex-sans');
     
     svg.append('g')
       .attr('class', 'bar-container')
       .selectAll('rect')
       .data(data)
       .enter().append('rect')
       .attr('class', 'bar')
       .attr('x', (d) => x(d.date))
       .attr('y', (d) => height)
       .attr('height', 0)
       .attr('width', x.bandwidth())
       .attr('fill', '#5478d7')
       .transition()
       .duration(500)
       .delay((d, i) => i * 50)
       .attr('height', (d) => height - y(d.amount))
       .attr('y', (d) => y(d.amount));
     
     // Select Tooltip
     const tooltip = d3.select('.tooltip');
       
     const bars = svg.selectAll('.bar')
       .on('mouseover', function(d) {   
          let color = d3.color('#00A78F').darker()
          d3.select(this)
             .attr('fill', color)
          tooltip
             .style('display', 'inherit')
             .text(`$${d.amount}`)
             .style('top', `${y(d.amount) - axisOffset}px`);
          
          let bandwidth = x.bandwidth();
          let tooltipWidth = tooltip.nodes()[0].getBoundingClientRect().width;
          let offset = (tooltipWidth - bandwidth) / 2;
          
          tooltip
             .style('left', `${x(d.date) + margin.left - offset}px`)
       })
       .on('mouseout', function(d) {
          d3.select(this)
             .transition()
             .duration(250)
             .attr('fill', '#5478d7')
          tooltip
             .style('display', 'none')
       })
     
          
  </script>
  <script type="text/javascript">
     var ctx = document.getElementById("myChart").getContext('2d');
     var myChart = new Chart(ctx, {
     type: 'pie',
     data: {
     labels: [ "Women", "Men"],
     datasets: [{
     backgroundColor: [
     
     "#b174c7",
     "#044372"
     ],
     data: [ 45, 55]
     }]
     }
     });
  </script>
@endsection