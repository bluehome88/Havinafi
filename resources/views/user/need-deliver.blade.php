<div id="need_delivery_form">
    <form role="form" method="POST" action="{{ url('/optimize-problem') }}">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group panel-heading no-margin">
                    <input class="form-control" type="text" name="transjob_name" placeholder="Name">
                </div>
            </div>
        </div>        
        <div class="my_task_block">
            <div class="panel-heading">
                <h4 class="panel-title">CHOOSE DELIVERY TASK(S)
                    <a class="pull-right" data-toggle="tooltip" title="Tooltip"><i class="fa fa-question-circle"></i></a>
                </h4>
            </div>
            <div role="tabpanel" class="tab-pane">
                @if(count($my_tasks) > 0)
                    @foreach($my_tasks as $my_task)
                        <div class="input-group">
                            <span class="form-control" aria-label="own-tasks{{$my_task->id}}">
                                @if( $my_task->passenger_delivery == 1 )
                                    <i class="fa fa-wheelchair"></i>
                                @else
                                    <i class="fa fa-dropbox"></i>
                                @endif
                                <input type="checkbox" aria-label="own-tasks{{$my_task->id}}" name="my_tasks[{{$my_task->id}}]">
                                <span class="record_name">
                                    {{$my_task->name}}
                                </span>
                                <button class="btn-link pull-right" onclick="showTaskPopup({{$my_task->id}})" type="button">
                                    <i class="fa fa-info-circle"></i>
                                </button>
                            </span>
                        </div>
                    @endforeach

                    <p class="nothing" style="display: none;">You don't have any tasks.</p>
                @else
                    <p class="nothing">You don't have any tasks.</p>
                @endif
                    <div class="input-group">
                        <span class="form-control">
                            <a class="add_new_link new_task_link" href="#"><i class="fa fa-plus"></i> ADD NEW TASK</a>
                        </span>
                    </div>
            </div>
        </div>
        <div class="panel-default datepicker">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <span>CHOOSE DATE</span>
                    <a class="pull-right" data-toggle="tooltip" title="Tooltip"><i class="fa fa-question-circle"></i></a>
                </h4>
            </div>

            <div id="find_job_accordion" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="job-date-heading">
                <input class="job_datepicker" type="hidden" name="find_job_date">
            </div>
        </div> 
        <div class="row">
            <div class="find-route">
                <button type="button" class="btn btn-primary btn-block center-block find_route">FIND DELIVERER</button>
            </div>
        </div>
    </form>
</div>