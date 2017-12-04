<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">Traffic</h4>
                <div class="small text-muted">November 2015</div>
            </div>
            <!--/.col-->
            <div class="col-sm-7 d-none d-md-block">
                <button type="button" class="btn btn-primary float-right"><i class="icon-cloud-download"></i></button>
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-3" data-toggle="buttons" aria-label="First group">
                        <label class="btn btn-outline-secondary">
                            <input type="radio" name="options" id="option1"> Day
                        </label>
                        <label class="btn btn-outline-secondary active">
                            <input type="radio" name="options" id="option2" checked=""> Month
                        </label>
                        <label class="btn btn-outline-secondary">
                            <input type="radio" name="options" id="option3"> Year
                        </label>
                    </div>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
        <div class="chart-wrapper" style="height:300px;margin-top:40px;">
            <canvas id="main-chart" class="chart" height="300"></canvas>
        </div>
    </div>
    <div class="card-footer">
        <ul>
            <li class="d-none d-md-table-cell">
                <div class="text-muted">Sales</div>
                <strong>$ 104,304.00 (20%)</strong>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </li>   
            <li>
                <div class="text-muted">Expenses</div>
                <strong>56,341.25 (60%)</strong>
                <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!--/.card-->
