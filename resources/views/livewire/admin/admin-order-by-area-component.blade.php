<div class="main-content">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title"><h2>All Order Sale Detail By Month & Area</h2></div>
                            </div>
                        
                        <div class="card-body">
                            <table class="table table-responsive">
                              <thead>
                                    <th>Month</th>
                                    @foreach ($citys as $city)
                                        <th>Total Amount Earn By {{ $city }}</th>
                                        @endforeach
                                        @foreach ($citys as $city)
                                        <th>Total Order By {{ $city }}</th>
                                    @endforeach
                                </thead>
                                <tbody>
                                @foreach ($report as $month => $values)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($month)->format('F Y') }}</td>
                                        @foreach ($citys as $city)
                                            <td>{{ $report[$month][$city]['amount'] ?? '0' }}</td>
                                        @endforeach
                                        @foreach ($citys as $city)
                                            <td>{{ $report[$month][$city]['count'] ?? '0' }}</td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="container-fluid">
                                <ol class="p-2  text-dark" style="display: inline-block;">
                                @foreach($products as $product)
                                <li style="display: inline-block;">
                                <input type="checkbox" value="{{$product->id}}" wire:model="types"/>
                                <span>{{$product->name}}</span>
                                </li >
                                @endforeach
                                </ol>
                                <div class="row flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                                <div class=" col-md-6 shadow rounded p-4 border bg-white flex-1" style="height: 32rem;">
                                <livewire:livewire-column-chart
                                key="{{ $columnChartModel->reactiveKey() }}"
                                :column-chart-model="$columnChartModel"
                                />
                                </div>
                                <div class=" col-md-6 shadow rounded p-4 border bg-white flex-1" style="height: 32rem;">
                                <livewire:livewire-pie-chart
                                key="{{ $pieChartModel->reactiveKey() }}"
                                :pie-chart-model="$pieChartModel"
                                />
                            </div>
                        </div>
                     </div>
                </div>
                <div class="container-fluid" style="padding-top:30px;">
                    <div class="col-md-12">
                    <div class="card bg-light">
                        <div class="row">
                            <div class="card-header">
                                <div class="card-title">
                                <div class="justify-content-left mt-lg-5">

                                    <p class="font-Rubik text-left text-success text-bold">
                                        Orders By Date: {{ $filter }}
                                    </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <select class="form-control bg-dark text-white" wire:model="filter">
                                    @foreach($filters as $filter)
                                        <option class="text-white" value="{{ $filter }}">{{ $filter }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-12">
                                <div id="chart"></div>
                            </div>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
               
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>

</div>
@push('scripts')

<script>

    window.addEventListener('DOMContentLoaded', (event) => {
        renderChart(@json($chartData));
    });


    window.addEventListener('renderChart', ({detail}) => {
        renderChart(detail.data);
    }, false);

    const renderChart = chartData => {

        const counts = chartData.map(item => item.count);
        const years = chartData.map(item => item.year);

        const chart = new ApexCharts(document.querySelector("#chart"), {
            chart: {
                type: 'line'
            },
            series: [{
                name: 'orders',
                data: counts
            }],
            xaxis: {
                categories: years
            }
        });

        chart.render();
    }

</script>

@endpush
