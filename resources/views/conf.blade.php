@extends('layouts.app')

@section('htmlheader_title')
Configurations
@endsection

@section('main-content')

@section('contentheader_title')
Configurations
@endsection
<div class="container spark-screen">
    <div class="col-md-11">
        <!-- Ebay Configuration -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Ebay Configurations</div>
                <div class="panel-body">
                    <form class="form-horizontal configurationForm" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3" for="developerId">Developer Id:</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="ebay_developer_id" name="ebay_developer_id" placeholder="Ebay Developer Id" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="applicationId">Application Id:</label>
                            <div class="col-md-9"> 
                                <input type="text" class="form-control" id="ebay_application_id" name="ebay_application_id" placeholder="Ebay Application Id" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="certificationId">Certification Id:</label>
                            <div class="col-md-9"> 
                                <input type="text" class="form-control" id="ebay_certification_id" name="ebay_certification_id" placeholder="Ebay Certification Id" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" for="token">User Token:</label>
                            <div class="col-md-9"> 
                                <textarea class="form-control" id="ebay_user_token" name="ebay_user_token" placeholder="User Token" required></textarea>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-md-offset-2 col-md-9">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Shipping Method CSV -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Ebay Configurations</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-4" for="developerId">Shipping Method:</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="email" placeholder="Ebay Developer Id">
                            </div>
                        </div>
                        <div class="form-group"> 
                            <div class="col-md-offset-2 col-md-9">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection