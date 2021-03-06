<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Scroll Animation Library</title>
    <link rel="stylesheet" href="./template/thuvien/css/scroll-animation.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <section class="home d-flex align-items-center">
        <div class="backdrop"></div>
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center text-white" data-san="slideTop">
                    <h1 class="display-2 mb-4">We Make Your Dream Come True</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero inventore soluta ducimus officia
                        cumque ad accusantium quaerat, labore, quam saepe architecto excepturi, dicta temporibus magni
                        beatae laudantium libero velit! Nesciunt!
                    </p>
                    <a href="#!" class="btn btn-lg btn-primary rounded-pill px-3" role="button">Make It Happen</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-6" data-san="slideRight">
                    <img class="w-100 rounded-lg shadow"
                        src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=300&w=300"
                        alt="">
                </div>
                <div class="col-6 d-flex align-items-center" data-san="slideLeft" data-san-delay="400">
                    <div class="ml-5">
                        <h2 class="h1">About <span class="text-primary">Us</span></h2>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit, odio impedit? Alias,
                            consequuntur quam. Accusamus eveniet dolorem perspiciatis voluptatibus labore deleniti non
                            hic
                            quasi obcaecati magni! Nostrum quidem officia ullam?
                        </p>
                        <a href="#!" class="btn btn-outline-primary rounded-pill px-3" role="button">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team mt-5 py-5 bg-light">
        <div class="container text-center">
            <h2 class="h1 mb-3" data-san="slideTop">Our <span class="text-primary">Team</span></h2>
            <p class="mb-5 w-50 mx-auto" data-san="slideTop">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ipsa, delectus,
                iusto corrupti eum maxime necessitatibus, expedita debitis dolorem.</p>
            <div class="row">
                <div class="col-3" data-san="slideTop">
                    <div class="card border-0 rounded-lg">
                        <div class="card-body p-0">
                            <img class="w-100 rounded-lg"
                                src="https://images.pexels.com/photos/2841720/pexels-photo-2841720.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3" data-san-delay="200" data-san="slideTop">
                    <div class="card border-0 rounded-lg">
                        <div class="card-body p-0">
                            <img class="w-100 rounded-lg"
                                src="https://images.pexels.com/photos/2853507/pexels-photo-2853507.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3" data-san-delay="400" data-san="slideTop">
                    <div class="card border-0 rounded-lg">
                        <div class="card-body p-0">
                            <img class="w-100 rounded-lg"
                                src="https://images.pexels.com/photos/2883383/pexels-photo-2883383.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-3" data-san-delay="600" data-san="slideTop">
                    <div class="card border-0 rounded-lg">
                        <div class="card-body p-0">
                            <img class="w-100 rounded-lg"
                                src="https://images.pexels.com/photos/2932727/pexels-photo-2932727.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact mt-5 py-5">
        <div class="backdrop"></div>
        <div class="container">
            <div class="row">
                <div class="col-6 mx-auto pl-4 text-white" data-san="slideLeft" data-san-delay="200">
                    <h2 class="display-3 mb-3">Contact Now</h2>
                    <form>
                        <div class="form-group">
                            <label for="">Your Name</label>
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="">Your Email</label>
                            <input type="text" class="form-control" placeholder="mail@example.com">
                        </div>
                        <div class="form-group">
                            <label for="">Your Message</label>
                            <textarea class="form-control" placeholder="Your Message"></textarea>
                        </div>
                        <button class="mt-5 btn btn-lg btn-block btn-primary px-3 rounded-pill">Send Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-primary text-white text-center py-3">
        Copyright @company 2019
    </footer>


    <script src="./template/thuvien/js/scroll-animation.js"></script>
</body>

</html>