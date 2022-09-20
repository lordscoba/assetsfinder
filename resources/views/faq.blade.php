@extends('layouts.app')

@section('content')




    <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Faq</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Faq</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- section start -->
    <section class="faq-section log-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1">
                    <div class="faq-image text-center">
                        <img src="../assets/images/inner-pages/3.svg" class="img-fluid" alt="">
                        <h3>Have Any Questions ?</h3>
                        <p class="font-roboto">You can ask anything you want to know</p>
                    </div>
                    {{-- <form>
                        <div class="form-group mb-0">
                            <label>Let me know</label>
                            <input type="text" class="form-control" placeholder="Ask a question" required>
                        </div>
                        <button type="submit" class="btn btn-gradient color-2">Send</button>
                    </form> --}}
                </div>
                <div class="col-lg-6">
                    <div class="faq-questions">
                        <div class="title-3 text-start">
                            <h2>Frequently ask question</h2>
                        </div>
                        <div id="accordion" class="accordion">
                          @foreach (DB::table('faqs')->get() as $faq)
                          <div class="card">
                            <div class="card-header">
                              <a class="card-link" data-bs-toggle="collapse" href="faq.html#collapseOne" aria-expanded="true">
                                  {{ $faq->title }}
                              </a>
                            </div>
                            <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                              <div class="card-body">
                                {{ $faq->body }}
                              </div>
                            </div>
                          </div>
                          @endforeach
                            <div class="card">
                              <div class="card-header">
                                <a class="card-link" data-bs-toggle="collapse" href="faq.html#collapseOne" aria-expanded="true">
                                    Different types of housing tenure can be used for the same physical type.
                                </a>
                              </div>
                              <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                                <div class="card-body">
                                    In markets where land and building prices are rising, real estate is often purchased as an investment, whether or not the owner intends to use the property.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header">
                                <a class="collapsed card-link" data-bs-toggle="collapse" href="faq.html#collapseTwo">
                                    Section 1.10.32 of "de Finibus Bonorum et Malorum", written by
                              </a>
                              </div>
                              <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                <div class="card-body">
                                    In markets where land and building prices are rising, real estate is often purchased as an investment, whether or not the owner intends to use the property.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header">
                                <a class="collapsed card-link" data-bs-toggle="collapse" href="faq.html#collapseThree">
                                    Different types of housing tenure can be used for the same physical type.
                                </a>
                              </div>
                              <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                <div class="card-body">
                                    In markets where land and building prices are rising, real estate is often purchased as an investment, whether or not the owner intends to use the property. In markets where land and building prices are rising, real estate is often purchased as an investment, whether or not the owner intends to use the property.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                  <a class="card-link" data-bs-toggle="collapse" href="faq.html#collapseFour">
                                    Different types of housing tenure can be used for the same physical type.
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-bs-parent="#accordion">
                                  <div class="card-body">
                                    In markets where land and building prices are rising, real estate is often purchased as an investment, whether or not the owner intends to use the property. In markets where land and building prices are rising, real estate is often purchased as an investment, whether or not the owner intends to use the property.
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header">
                                  <a class="collapsed card-link" data-bs-toggle="collapse" href="faq.html#collapseFive">
                                      Section 1.10.32 of "de Finibus Bonorum et Malorum", written
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-bs-parent="#accordion">
                                  <div class="card-body">
                                    In markets where land and building prices are rising, real estate is often purchased as an investment, whether or not the owner intends to use the property.In markets where land and building prices are rising, real estate is often purchased as an investment, whether or not the owner intends to use the property.
                                  </div>
                                </div>
                              </div>
                              <div class="card">
                                <div class="card-header">
                                  <a class="collapsed card-link" data-bs-toggle="collapse" href="faq.html#collapseSix">
                                    Different types of housing tenure can be used for the same physical type.
                                  </a>
                                </div>
                                <div id="collapseSix" class="collapse" data-bs-parent="#accordion">
                                  <div class="card-body">
                                    In markets where land and building prices are rising, real estate is often purchased as an investment, whether or not the owner intends to use the property.In markets where land and building prices are rising, real estate is often purchased as an investment, whether or not the owner intends to use the property.
                                  </div>
                                </div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    
@endsection