<div class="container">
    <div class="col-sm-8 col-sm-offset-2">
        <form role="search" style="margin-bottom: 20px;" action="/search" method="GET">
            <div class="row">
                <div class="col-xs-12 col-sm-9">
                    <input type="text" name="value" class="form-control" placeholder="I'm looking for..." style="width: 100%; margin-bottom: 5px;" value="{{$query or ''}}">
                </div>
                <div class="col-xs-12 col-sm-3">
                    <button type="submit" class="btn btn-primary" style="width: 100%;">
                        <i class="fa fa-search" aria-hidden="true"></i> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>