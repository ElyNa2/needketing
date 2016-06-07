<!-- Modal -->
<div id="myModal<%post.id%>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Post</h4>
            </div>
            <div class="modal-body">
                {!! Form::open() !!}
                <div class="row">
                    <div class="col-lg-2">
                        <img src="{{ Auth::user()->image }}" class="img-responsive" />
                    </div>
                    <div class="col-lg-10">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="What You Need ?" name="content" cols="50" rows="4">
                                <%post.content%>
                            </textarea>
                        </div>
                        <div class="col-lg-3">
                            <span class="glyphicon glyphicon-camera" id="image-upload"></span>
                            <input  type="file" name="image">
                            <a href="#" ng-model="collapsed" ng-click="collapsed=!collapsed">
                                <span class="glyphicon glyphicon-map-marker"></span>
                            </a>
                            <div ng-show="collapsed">
                                {!! Form::select('location',
                                [
                                    'Nawalparasi, Nepal' => 'Nawalparasi, Nepal',
                                    'Kathmandu, Nepal' => 'Kathmandu, Nepal',
                                    'Bhaktapur, Nepal' => 'Bhaktapur, Nepal',
                                    'Lalipur, Nepal' => 'Lalitpur, Nepal'
                                ],null,['class'=>'form-control','ng-required'=>'true'])
                            !!}
                            </div>
                        </div>
                        <div class="col-lg-9">
                            {!! Form::select('tags[]',$tags,null,['id'=>'tag_list_modal','class'=>'form-control','multiple','ng-required'=>'true']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Post</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div><!-- My Model -->