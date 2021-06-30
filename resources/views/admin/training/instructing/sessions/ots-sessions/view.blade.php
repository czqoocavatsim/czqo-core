@extends('admin.training.layouts.main')
@section('title', 'OTS Session with ' . $session->student->user->full_name_cid . ' - Instructing - ')
@section('training-content')
<a href="{{route('training.admin.instructing.ots-sessions')}}" class="blue-text" style="font-size: 1.2em;"> <i class="fas fa-arrow-left"></i> Training Sessions</a>
<div class="d-flex flex-row align-items-center mt-3">
    <img src="{{$session->instructor->user->profile_image}}" class="z-depth-1" style="height: 50px; width:50px;margin-right: 15px; margin-bottom: 3px; border-radius: 50%;">
    <img src="{{$session->student->user->profile_image}}" class="z-depth-1" style="height: 50px; z-index: 50; margin-left: -30px; width:50px;margin-right: 15px; margin-bottom: 3px; border-radius: 50%;">
    <div>
        <h2 class="blue-text mt-2 mb-1 font-weight-bold">OTS Session with {{$session->student->user->fname}}</h2>
        <h5 class="fw-500">
            Scheduled for {{$session->scheduled_time->toDayDateTimeString()}}
        </h5>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <h5 class="blue-text fw-500">Scheduled start</h5>
        <h5 class="d-flex flex-row align-items-center">
            {{$session->scheduled_time->toDayDateTimeString()}}
            <a data-toggle="modal" data-target="#editTimeModal">
                <i class="fas fa-edit ml-2 text-muted"></i>
            </a>
        </h5>
        <h5 class="mt-4 blue-text fw-500">Position</h5>
        @if ($session->position)
            <div class="list-group-item z-depth-1 rounded">
                <div class="d-flex flex-row w-100 align-items-center h-100 justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                        <i class="fas fa-wifi fa-fw mr-2"></i>
                        <div class="d-flex flex-column align-items-center h-100">
                            <h5 class="mb-0 fw-500">{{$session->position->identifier}}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled mt-3">
                @can('edit ots sessions')
                <li>
                    <a style="text-decoration:none;" data-toggle="modal" data-target="#assignPositionModal"><span class="blue-text"><i class="fas fa-chevron-right"></i></span> &nbsp; <span class="black-text">Reassign position</span></a>
                </li>
                @endcan
            </ul>
        @else
            <div class="list-group-item z-depth-1 rounded">
                <p>Not assigned.</p>
                <ul class="list-unstyled mt-3 mb-0">
                    @can('edit ots sessions')
                    <li>
                        <a style="text-decoration:none;" data-toggle="modal" data-target="#assignPositionModal"><span class="blue-text"><i class="fas fa-chevron-right"></i></span> &nbsp; <span class="black-text">Assign position</span></a>
                    </li>
                    @endcan
                </ul>
            </div>
        @endif
        @can('edit ots sessions')
            <h5 class="mt-4 blue-text fw-500">Actions</h5>
            <ul class="list-unstyled mt-2">
                @if ($session->scheduled_time > Carbon\Carbon::now() && $session->result == 'pending')
                <li class="mb-2">
                    <a data-target="#cancelSessionModal" data-toggle="modal" style="text-decoration:none;"><span class="red-text"><i class="fas fa-chevron-right"></i></span> &nbsp; <span class="black-text">Cancel session</span></a>
                </li>
                @endif
            </ul>
            <h5 class="mt-4 blue-text fw-500">Pass/Fail</h5>
            @if($session->result == 'pending')
                <ul class="list-unstyled mt-2">
                    <li class="mb-2">
                        <a data-target="#passModal" data-toggle="modal" style="text-decoration:none;"><i class="fas fa-chevron-right green-text"></i> &nbsp; <span class="black-text">Mark session as a pass</span></a>
                    </li>
                    <li class="mb-2">
                        <a data-target="#failModal" data-toggle="modal" style="text-decoration:none;"><i class="fas fa-chevron-right red-text"></i> &nbsp; <span class="black-text">Mark session as a fail</span></a>
                    </li>
                </ul>
            @elseif ($session->result == 'failed')
                <h3>
                    <span style='font-weight: 400' class='badge rounded red text-white p-2 shadow-none'>
                        Failed
                    </span>
                </h3>
                <ul class="list-unstyled mt-3">
                    @if($session->passFailRecord->report_url)
                    <li class="mb-3">
                        <a href="{{$session->passFailRecord->report_url}}" style="text-decoration:none;"><i class="fas fa-chevron-right"></i> &nbsp; <span class="black-text">View report</span></a>
                    </li>
                    @endif
                    <li class="mb-2">
                        <p>Remarks:</p>
                        {{$session->passFailRecord->remarksHtml()}}
                    </li>
                </ul>
            @elseif ($session->result == 'passed')
                <h3>
                    <span style='font-weight: 400' class='badge rounded green text-white p-2 shadow-none'>
                        Passed
                    </span>
                </h3>
                <ul class="list-unstyled mt-3">
                    @if($session->passFailRecord->report_url)
                    <li class="mb-3">
                        <a href="{{$session->passFailRecord->report_url}}" style="text-decoration:none;"><i class="fas fa-chevron-right"></i> &nbsp; <span class="black-text">View report</span></a>
                    </li>
                    @endif
                    <li class="mb-2">
                        <p>Remarks:</p>
                        {{$session->passFailRecord->remarksHtml()}}
                    </li>
                </ul>
            @endif
        @endcan
    </div>
    <div class="col-md-6">
        <h5 class="blue-text fw-500">Assessor</h5>
        <a href="{{route('training.admin.instructing.instructors.view', $session->instructor->user->id)}}" class="list-group-item list-group-item-action z-depth-1 rounded waves-effect">
            <div class="d-flex flex-row w-100 align-items-center h-100 justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    <img src="{{$session->instructor->user->profile_image}}" style="height: 30px; width:30px;margin-right: 15px; border-radius: 50%;">
                    <div class="d-flex flex-column align-items-center h-100">
                        <h5 class="mb-0 fw-500">{{$session->instructor->user->full_name}}</h5>
                    </div>
                </div>
            </div>
        </a>
        <ul class="list-unstyled mt-3">
            @can('edit ots sessions')
            <li class="mb-2">
                <a data-target="#reassignInstructorModal" data-toggle="modal" style="text-decoration:none;"><span class="blue-text"><i class="fas fa-chevron-right"></i></span> &nbsp; <span class="black-text">Assign to another instructor</span></a>
            </li>
            @endcan
        </ul>
        <h5 class="blue-text mt-4 fw-500">Student</h5>
        <a href="{{route('training.admin.instructing.students.view', $session->student->user->id)}}" class="list-group-item list-group-item-action z-depth-1 rounded waves-effect">
            <div class="d-flex flex-row w-100 align-items-center h-100 justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    <img src="{{$session->student->user->profile_image}}" style="height: 30px; width:30px;margin-right: 15px; border-radius: 50%;">
                    <div class="d-flex flex-column align-items-left h-100">
                        <h5 class="mb-0 fw-500">{{$session->student->user->full_name_cid}}</h5>
                        <div class="d-flex flex-row">
                            @foreach($session->student->labels as $label)
                                <span class="mr-2">
                                    {{$label->label()->labelHtml()}}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<hr class="mt-5 mb-4">
<h3 class="font-weight-bold blue-text mb-3">Remarks</h3>
<p>You must include a summary of the session here after completing it for record keeping purposes. The student will be able to see these remarks. Remarks autosave when you type in the text area.</p>
<textarea id="contentMD" name="content" style="display:none; height:" >{{$session->remarks}}</textarea>
@can('edit ots sessions')
<ul class="list-unstyled">
    <li class="mb-2 fw-500">
        <a href="" id="enableRemarkEditB" class="green-text fw-600" style="font-size: 1.1em;"><i class="fas fa-edit"></i>&nbsp;&nbsp;Enable editing of remarks</a>
    </li>
</ul>
@endcan
<script>
    var simplemde = new EasyMDE({ maxHeight: '200px', autofocus: true, autoRefresh: true, element: document.getElementById("contentMD")});
    simplemde.codemirror.setOption('readOnly', true);
    </script>
    @can('edit ots sessions')
    <script>
    simplemde.codemirror.on("changes", function(){
        //Make ajax request
        $.ajax({
            type: 'POST',
            url: '/admin/training/instructing/ots-sessions/ajax/remarks',
            data: {
                session_id: {{$session->id}},
                remarks: simplemde.value()
            },
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN':  $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                console.log(data)

            },
            error: function(data) {
                console.log('Error')
                console.log(data)

                //Error
                Toastify({
                    text: `Error saving remarks`,
                    duration: 5000,
                    close: true,
                    gravity: "bottom", // `top` or `bottom`
                    position: 'right', // `left`, `center` or `right`
                    backgroundColor: '#ff4444',
                    offset: {
                        x: 100, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                        y: 50 // vertical axis - can be a number or a string indicating unity. eg: '2em'
                    },
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                }).showToast();
            }
        })
    });

    $("#enableRemarkEditB").click(function (e) {
        simplemde.codemirror.setOption('readOnly', false)
        $("#enableRemarkEditB").text("Edit mode on.").addClass("text-muted").removeClass("green-text")
        e.preventDefault()
    })
</script>


<!--Edit time modal-->
<div class="modal fade" id="editTimeModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered model-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change scheduled time</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('training.admin.instructing.ots-sessions.edit.time', $session->id)}}" method="POST">
                @csrf
                <div class="modal-body">
                    @if($errors->editTimeErrors->any())
                        <div class="alert alert-danger">
                            <h4>There were errors</h4>
                            <ul class="pl-0 ml-0 list-unstyled">
                                @foreach ($errors->editTimeErrors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <label>New time</label>
                    <input type="datetime" name="new_time" class="form-control border pl-3 flatpickr" id="new_time">
                    <script>
                        flatpickr('#new_time', {
                            enableTime: true,
                            noCalendar: false,
                            dateFormat: "Y-m-d H:i",
                            time_24hr: true,
                            defaultTime: "{{$session->scheduled_time->format('Y-m-d H:i')}}"
                        });
                    </script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Dismiss</button>
                    <button class="btn btn-success">Change</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Start assign instructor modal-->
<div class="modal fade" id="reassignInstructorModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered model-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reassign instructor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('training.admin.instructing.ots-sessions.edit.instructor', $session->id)}}" method="POST">
                @csrf
                <div class="modal-body">
                    @if($errors->reassignInstructorErrors->any())
                        <div class="alert alert-danger">
                            <h4>There were errors</h4>
                            <ul class="pl-0 ml-0 list-unstyled">
                                @foreach ($errors->reassignInstructorErrors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="">Select instructor</label>
                        <select name="instructor_id" class="form-control">
                            <option hidden>Select one..</option>
                            @foreach ($instructors as $i)
                                <option value="{{$i->id}}">{{$i->user->full_name_cid}} - {{$i->staffPageTagline()}}</option>
                            @endforeach
                        </select>
                    </div>
                    <p>The assigned Instructor will be notified of the assignment and the session's details. It will be their responsibility to establish contact with the student.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Dismiss</button>
                    <button class="btn btn-success">Assign</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Start assign position modal-->
<div class="modal fade" id="assignPositionModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered model-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign position to session</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('training.admin.instructing.ots-sessions.edit.position', $session->id)}}" method="POST">
                @csrf
                <div class="modal-body">
                    @if($errors->assignPositionErrors->any())
                        <div class="alert alert-danger">
                            <h4>There were errors</h4>
                            <ul class="pl-0 ml-0 list-unstyled">
                                @foreach ($errors->assignPositionErrors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="">Select position</label>
                        <select name="position_id" class="form-control">
                            <option hidden>Select one..</option>
                            @foreach ($positions as $p)
                                <option value="{{$p->id}}">{{$p->identifier}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Dismiss</button>
                    <button class="btn btn-success">Assign</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--Start marked as passed modal-->
<div class="modal fade" id="passModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered model-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mark session as passed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('training.admin.instructing.ots-sessions.result.pass', $session->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    @if($errors->markPassedErrors->any())
                        <div class="alert alert-danger">
                            <h4>There were errors</h4>
                            <ul class="pl-0 ml-0 list-unstyled">
                                @foreach ($errors->markPassedErrors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label>The report PDF/DOCX file for this OTS session</label>
                        <div class="input-group pb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="reportFile">
                                <label class="custom-file-label">Choose document/PDF file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Remarks</label>
                        <textarea id="contentMD2" name="remarks" style="display:none; height:"></textarea>
                        <script>
                            var simplemde = new EasyMDE({ maxHeight: '200px', autofocus: true, autoRefresh: true, element: document.getElementById("contentMD2")});
                        </script>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Dismiss</button>
                    <button class="btn btn-success">Pass</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--Start marked as failed modal-->
<div class="modal fade" id="failModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered model-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Mark session as failed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('training.admin.instructing.ots-sessions.result.fail', $session->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    @if($errors->markPassedErrors->any())
                        <div class="alert alert-danger">
                            <h4>There were errors</h4>
                            <ul class="pl-0 ml-0 list-unstyled">
                                @foreach ($errors->markPassedErrors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="form-group">
                        <label>The report PDF/DOCX file for this OTS session</label>
                        <div class="input-group pb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="reportFile">
                                <label class="custom-file-label">Choose document/PDF file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Remarks</label>
                        <textarea id="contentMD3" name="remarks" style="display:none; height:"></textarea>
                        <script>
                            var simplemde = new EasyMDE({ maxHeight: '200px', autofocus: true, autoRefresh: true, element: document.getElementById("contentMD3")});
                        </script>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Dismiss</button>
                    <button class="btn btn-danger">Fail</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Cancel modal-->
<div class="modal fade" id="cancelSessionModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>The student will be notified by email. Please ensure proper communication with the student.</p>
                <p>The session will also no longer be available to view.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Dismiss</button>
                <a href="{{route('training.admin.instructing.ots-sessions.cancel', $session->id)}}" role="button" class="btn btn-danger">Cancel Session</a>
            </div>
            </form>
        </div>
    </div>
</div>
<!--End cancel modal-->
@endcan
<script>
    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results[1] || 0;
    }

    if ($.urlParam('editTimeModal') && $.urlParam('editTimeModal') == '1') {
        $("#editTimeModal").modal();
    }

    if ($.urlParam('reassignInstructorModal') == '1') {
        $("#reassignInstructorModal").modal();
    }


    if ($.urlParam('assignPositionModal') == '1') {
        $("#assignPositionModal").modal();
    }

    if ($.urlParam('passModal') == '1') {
        $("#passModal").modal();
    }
</script>

@endsection
