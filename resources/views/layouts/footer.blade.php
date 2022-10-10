<style>
    .footers a {
        color: #696969;
    }

    .footers p {
        color: #696969;
    }

    .footers ul {
        line-height: 30px;
    }

   .footers #social-fb:hover {
        color: #3B5998;
        transition: all .001s;
    }

   .footers #social-tw:hover {
        color: #4099FF;
        transition: all .001s;
    }

   .footers #social-gp:hover {
        color: #d34836;
        transition: all .001s;
    }

    .footers #social-em:hover {
        color: #f39c12;
        transition: all .001s;
    }
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<section class="footers bg-light pt-5 pb-3">
    <div class="container pt-5">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 footers-one">
                <div class="footers-logo">
                    <i class="bi bi-truck  primary font-large-2 float-left"></i>

                </div>
                <div class="footers-info mt-3">
                    <p>Cras sociis natoque penatibus et magnis Lorem Ipsum tells about the compmany right now the best.
                    </p>
                </div>
                <div class="social-icons">
                    <a href="https://www.facebook.com/"><i id="social-fb"
                            class="fa fa-facebook-square fa-2x social"></i></a>
                    <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>
                    <a href="https://plus.google.com/"><i id="social-gp"
                            class="fa fa-google-plus-square fa-2x social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i id="social-em"
                            class="fa fa-envelope-square fa-2x social"></i></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2 footers-two">
                <h5><a href="{{ route('shipments') }}" class="nav-link">Shipments</a>
                </h5>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-2 footers-three">
                <h5> <a href="{{ route('journals') }}" class="nav-link">Journals</a>
                </h5>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-2 footers-four">
                <h5> <a href="{{ route('shipments.create') }}" class="nav-link">Create Shipment</a>
                </h5>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-2 footers-five">
                <h5> <a href="{{ route('journals.create') }}" class="nav-link">Create Journal</a>
                </h5>

            </div>

        </div>
    </div>
</section>
