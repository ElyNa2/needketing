<div class="modal fade" id="exampleModal<% post.id  %>" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Report message</h4>
            </div>
            {!! Form::open(array('route'=>'report.posts','method'=>'post')) !!}

                <div class="modal-body">
                    <div class="form-group">
                        <label for="report_message" class="control-label">Report Message:</label>
                        <textarea class="form-control" id="report_message" name="report_message"></textarea>
                    </div>
                </div>

                <input name="post_id" type="hidden" value="<% post.id  %>">

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send message</button>
                </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>