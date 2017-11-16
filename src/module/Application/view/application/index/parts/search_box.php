<form id="custom-search-input" method="get" action="<?php echo $this->url('search') ?>">
    <div class="input-group col-md-12">

            <input type="text" class="form-control input-lg" placeholder="Enter search term..." name="q" />
            <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
    </div>
</form>