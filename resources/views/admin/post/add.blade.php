@extends('admin/layout.layout')

@section('page_title','Manage Post')

@section('container')

   <div class="">
                  <div class="page-title">
                     <div class="title_left">
                        <h3>Manage Post</h3>
                     </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row">
                     <div class="col-md-12 ">
                        <div class="x_panel">
                           <div class="x_content">
                              <br />
                              <form class="form-horizontal form-label-left" method="post" action="{{url('/admin/post/submit')}}" enctype="multipart/form-data">
								@csrf
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="text" class="form-control" placeholder="Title" name="title">
									   @error('title')
									   <span class="field_error">{{$message}}</span>
									   @enderror
                                    </div>
                                 </div>
								 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Slug</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="text" class="form-control" placeholder="Slug" name="slug">
									   @error('slug')
									   <span class="field_error">{{$message}}</span>
									   @enderror
                                    </div>
                                 </div>
								 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Short Desc</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <textarea class="form-control"  name="short_desc"></textarea>
									   @error('short_desc')
									   <span class="field_error">{{$message}}</span>
									   @enderror
                                    </div>
                                 </div>                           
                                 <?php
                                 for($x=1; $x<11; $x++){                                          
                                 ?>
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Para <?php echo $x ?></label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <textarea class="form-control"  name="para<?php echo $x ?>"></textarea>
									   @error('description')
									   <span class="field_error">{{$message}}</span>
									   @enderror
                                    </div>
                                 </div>
                                 <?php } ?>
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Work Cited</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="text" class="form-control" placeholder="WorkCited" name="wc">
									   @error('slug')
									   <span class="field_error">{{$message}}</span>
									   @enderror
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Category</label>
                                    <div class="col-md-9 col-sm-9 ">
                                    <select name="typo" id="typo">
                                       <option value="Metaverse">Metaverse</option>
                                       <option value="Covid">Covid</option>
                                       <option value="Politics">Politics</option>
                                       <option value="Economics">Economics</option>
                                       <option value="Exo-Planet">Exo Space Life</option>
                                       <option value="College-Writing">College Writing</option>
                                    </select>
									   @error('long_desc')
									   <span class="field_error">{{$message}}</span>
									   @enderror
                                    </div>
                                 </div>
                                 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Image</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="file" name="image">
									   @error('image')
									   <span class="field_error">{{$message}}</span>
									   @enderror
                                    </div>
                                 </div>
                                 
								 <div class="form-group row ">
                                    <label class="control-label col-md-3 col-sm-3 ">Post Date</label>
                                    <div class="col-md-9 col-sm-9 ">
                                       <input type="date" name="post_date" class="form-control" >
									   @error('post_date')
									   <span class="field_error">{{$message}}</span>
									   @enderror
                                    </div>
                                 </div>
                                 <div class="ln_solid"></div>
                                 <div class="form-group">
                                    <div class="col-md-9 col-sm-9  offset-md-3">
                                       <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            

@endsection