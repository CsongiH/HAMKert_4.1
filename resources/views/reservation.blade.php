<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Elérhetőségeink</h6>
                        <h2>Foglaljon asztalt telefonon, e-mailben, vagy weboldalunkon.</h2>
                    </div>
                    <p>Amennyiben nem kíván előre asztalt foglalni, csak térjen be éttermünkbe, és kollegáink segítenek önnek egy szabad asztalt találni. </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Telefon</h4>
                                <span><br><a href="#">+36202164890</a><br></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>E-mail</h4>
                                <span><a href="#">foglalas@hamkert.hu</a><br><a href="#">info@hamkert.hu</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="{{url('reservation')}}" method="post">

                        @csrf

                        <div class="row">
                            <div class="col-lg-12">
                                <h4>Asztalfoglalás</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Név*" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail cím*" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" id="phone" placeholder="Telefonszám*" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input type="number" name="Guests" placeholder="Vendégek száma*" required="">
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">
                                    <div class="input-group date" data-date-format="dd/mm/yyyy">
                                        <input  name="date" id="date" type="text" class="form-control" placeholder="nn/hh/éééé">
                                        <div class="input-group-addon" >
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <input type="time" name="time">
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Megjegyzés" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button-icon">Lefoglalom!</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
