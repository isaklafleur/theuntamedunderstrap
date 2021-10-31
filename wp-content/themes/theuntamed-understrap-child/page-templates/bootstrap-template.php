<?php
/**
 * Template Name: Bootstrap Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm p-3">
            <button type="button" class="btn btn-primary mt-5 btn-block shadow-none text-uppercase">Button Primary</button>
            <button type="button" class="btn btn-outline-primary mt-5 btn-block shadow-none text-uppercase">BUTTON OUTLINE PRIMARY</button>
        </div>
        <div class="col-sm bg-primary p-3">
            <button type="button" class="btn btn-outline-secondary mt-5 btn-block shadow-none text-uppercase">BUTTON OUTLINE SECONDARY</button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm p-3">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In orci arcu, ultricies in lobortis sit amet, sollicitudin vel risus. Maecenas dapibus libero vitae augue ornare, in faucibus
                nulla mattis. Nunc sed blandit ex. Quisque quis suscipit lacus, ac pretium velit. Donec ut velit lectus. Pellentesque at ligula nisl. Aliquam efficitur nulla eu nunc porttitor, non
                convallis erat vulputate. Nulla commodo, quam quis laoreet imperdiet, purus nunc placerat est, non ultrices lorem orci at urna. Phasellus tempor id enim non facilisis. Phasellus
                efficitur est sapien, id commodo purus maximus id. Donec sed euismod quam, non blandit sapien. Cras lacus nulla, gravida sit amet tempor in, porttitor vestibulum urna. Sed id
                scelerisque nulla, eu blandit tortor.
            <p>
        </div>
        <div class="col-sm p-3">
            <h1 class="text-uppercase">DANSE DaS FAERIES (h1 tag)</h1>
            <h2 class="text-uppercase">DANSE DaS FAERIES (h2 tag)</h2>
            <h3 class="text-uppercase">DANSE DaS FAERIES (h3 tag)</h3>
            <a href="" class="text-uppercase">Example Link</a>
            <ul>
                <li>Coffee</li>
                <li>Tea</li>
                <li>Milk</li>
            </ul>
        </div>
    </div>


    <div class="row">
        <div class="col-sm p-3 bg-primary">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputText" aria-describedby="emailHelp" placeholder="Enter some text">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <select class="form-control form-control-lg">
                        <option selected>Choose...</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                        <option>Option 4</option>
                    </select>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label text-secondary" for="customCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-outline-secondary mt-5 btn-block shadow-none text-uppercase">Submit</button>
            </form>
        </div>
        <div class="col-sm p-3 bg-primary">
            <div class="form-group">
                <select class="form-control form-control-lg countrylist text-secondary">
                    <option selected>Choose...</option>
                    <option>Nigeria</option>
                    <option>Sweden</option>
                    <option>Poland</option>
                    <option>Spain</option>
                    <option>Nigeria</option>
                    <option>Sweden</option>
                    <option>Poland</option>
                    <option>Spain</option>
                    <option>Nigeria</option>
                    <option>Sweden</option>
                    <option>Poland</option>
                    <option>Spain</option>
                    <option>Nigeria</option>
                    <option>Sweden</option>
                    <option>Poland</option>
                    <option>Spain</option>
                    <option>Nigeria</option>
                    <option>Sweden</option>
                    <option>Poland</option>
                    <option>Spain</option>
                </select>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a href="#">
                        <div class="row imagewrapper">
                            <div class="text-center"><img class="img-fluid" src="https://staging-theuntamedmultisite.kinsta.cloud/wp-content/uploads/2021/09/prd-img-1-1-300x300.png" alt=""></div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <h3>BEYOND NEW LIGHT BRIGHTENING FOAMING CLEANSER</h3>
                            </div>
                            <div class="col-4 text-right">
                                <span>€28</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="row imagewrapper">
                            <div class="text-center"><img class="img-fluid" src="https://staging-theuntamedmultisite.kinsta.cloud/wp-content/uploads/2021/09/prd-img-1-1-300x300.png" alt=""></div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <h3>BEYOND NEW LIGHT BRIGHTENING FOAMING CLEANSER</h3>
                            </div>
                            <div class="col-4 text-right">
                                <span>€28</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="row imagewrapper">
                            <div class="text-center"><img class="img-fluid" src="https://staging-theuntamedmultisite.kinsta.cloud/wp-content/uploads/2021/09/prd-img-1-1-300x300.png" alt=""></div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <h3>BEYOND NEW LIGHT BRIGHTENING FOAMING CLEANSER</h3>
                            </div>
                            <div class="col-4 text-right">
                                <span>€28</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="row imagewrapper">
                            <div class="text-center"><img class="img-fluid" src="https://staging-theuntamedmultisite.kinsta.cloud/wp-content/uploads/2021/09/prd-img-1-1-300x300.png" alt=""></div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <h3>BEYOND NEW LIGHT BRIGHTENING FOAMING CLEANSER</h3>
                            </div>
                            <div class="col-4 text-right">
                                <span>€28</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a href="#">
                        <div class="row imagewrapper">
                            <div class="text-center"><img class="img-fluid" src="https://staging-theuntamedmultisite.kinsta.cloud/wp-content/uploads/2021/09/prd-img-1-1-300x300.png" alt=""></div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <h3>BEYOND NEW LIGHT BRIGHTENING FOAMING CLEANSER</h3>
                            </div>
                            <div class="col-4 text-right">
                                <span>€28</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="row imagewrapper">
                            <div class="text-center"><img class="img-fluid" src="https://staging-theuntamedmultisite.kinsta.cloud/wp-content/uploads/2021/09/prd-img-1-1-300x300.png" alt=""></div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <h3>BEYOND NEW LIGHT BRIGHTENING FOAMING CLEANSER</h3>
                            </div>
                            <div class="col-4 text-right">
                                <span>€28</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="row imagewrapper">
                            <div class="text-center"><img class="img-fluid" src="https://staging-theuntamedmultisite.kinsta.cloud/wp-content/uploads/2021/09/prd-img-1-1-300x300.png" alt=""></div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <h3>BEYOND NEW LIGHT BRIGHTENING FOAMING CLEANSER</h3>
                            </div>
                            <div class="col-4 text-right">
                                <span>€28</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        <div class="row imagewrapper">
                            <div class="text-center"><img class="img-fluid" src="https://staging-theuntamedmultisite.kinsta.cloud/wp-content/uploads/2021/09/prd-img-1-1-300x300.png" alt=""></div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <h3>BEYOND NEW LIGHT BRIGHTENING FOAMING CLEANSER</h3>
                            </div>
                            <div class="col-4 text-right">
                                <span>€28</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<?php get_footer(); ?>