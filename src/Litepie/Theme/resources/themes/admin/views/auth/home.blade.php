<div class="content-wrapper">
    <section class="content-header">
        <h1>
        {!!trans('app.dashboard')!!}
        <small>{!!trans('app.version')!!}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!!trans_url('/admin')!!}"><i class="fa fa-dashboard"></i> {!!trans('app.home')!!}</a></li>
            <li class="active">{!!trans('app.dashboard')!!}</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="{!!trans_url('/admin/page/page')!!}">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Pages</span>
                            <span class="info-box-number">{!!Page::count()!!}</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="{!!trans_url('/admin/calendar/calendar')!!}">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-calendar"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Events</span>
                            <span class="info-box-number">{!!Calendar::count()!!}</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="{!!trans_url('/admin/news/news')!!}">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-newspaper-o"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">News</span>
                            <span class="info-box-number">{!!News::count('admin.web')!!}</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <a href="{!!trans_url('/admin/user/user')!!}">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Users</span>
                            <span class="info-box-number">{!!User::count()!!}</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Calender</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        {!!Calendar::gadget('admin.calendar.gadget')!!}
                    </div>
                    <div class="box-footer clearfix">
                        <a href="{!! trans_url('admin/calendar/calendar') !!}" class="btn btn-sm btn-info btn-flat new-client pull-right">View All Events</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tasks</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body with-border">
                        {!!Task::gadget('admin.task.gadget')!!}
                    </div>
                    <div class="box-footer clearfix">
                        <a href="{!! trans_url('admin/task/task') !!}" class="btn btn-sm btn-info btn-flat new-client pull-right">View All Tasks</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">News</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body with-border">
                        {!!News::gadget('admin.news.gadget')!!}
                    </div>
                    <div class="box-footer clearfix">
                        <a href="{!! trans_url('admin/news/news') !!}" class="btn btn-sm btn-info btn-flat new-client pull-right">View All News</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
