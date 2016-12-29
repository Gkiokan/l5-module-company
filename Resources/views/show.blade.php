@extends('company::layouts.master')

@section('content')
    <h1>Show Company Information<small></small></h1>
    <div class='space_50'></div>



    <div class='form-horizontal'>

        {{-- First row --}}
        <div class='row'>
            <div class='col-xs-12 col-sm-10'>
                  {{-- Firmenname --}}
                  <div class="form-group">
                      <label class="control-label col-sm-3" for="name">Company Name</label>
                      <div class='col-sm-9'>
                          <input type='text' id='name' class='form-control' name='name'
                                placeholder="Official Name of the company" value='{{ $company->name }}'>
                      </div>
                  </div>

                  {{-- HR --}}
                  <div class="form-group">
                      <label class="control-label col-sm-3" for="hr">Company register Nr.</label>
                      <div class='col-sm-9'>
                          <input type='text' id='hr' class='form-control' name='hr'
                                placeholder="Registered Company Number" value='{{ $company->hr }}'>
                      </div>
                  </div>

                  {{-- owner --}}
                  <div class="form-group">
                      <label class="control-label col-sm-3" for="owner">Owner</label>
                      <div class='col-sm-9'>
                          <input type='text' id='owner' class='form-control' name='owner'
                                placeholder="Who is the owner of this company?" value='{{ $company->owner }}'>
                      </div>
                  </div>




            </div>
        </div>
        {{-- END first row  --}}
        <div class='space_50'></div>


        {{-- 2nd row --}}
        <div class='row'>
            <div class='col-xs-12 col-sm-5'>

                  {{-- Company info email --}}
                  <div class="form-group">
                      <label class="control-label col-sm-3" for="email_info">Info</label>
                      <div class='col-sm-9'>
                          <input type='text' id='email_info' class='form-control' name='email_info'
                                 placeholder="Info E-Mail adress of the company" value='{{ $company->email_info }}'>
                      </div>
                  </div>

                  {{-- Company support email --}}
                  <div class="form-group">
                      <label class="control-label col-sm-3" for="email_support">Support</label>
                      <div class='col-sm-9'>
                          <input type='text' id='email_support' class='form-control' name='email_support'
                                 placeholder="Support E-Mail adress for anyone" value='{{ $company->email_support }}'>
                      </div>
                  </div>


                  {{-- Tel --}}
                  <div class="form-group">
                      <label class="control-label col-sm-3" for="tel">Tel</label>
                      <div class='col-sm-9'>
                          <input type='text' id='tel' class='form-control' name='tel'
                                 placeholder="Company Phone Number" value='{{ $company->tel }}'>
                      </div>
                  </div>

                  {{-- Fax --}}
                  <div class="form-group">
                      <label class="control-label col-sm-3" for="fax">Fax</label>
                      <div class='col-sm-9'>
                          <input type='text' id='fax' class='form-control' name='fax'
                                placeholder="Company Fax Number" value='{{ $company->fax }}'>
                      </div>
                  </div>

            </div>
            <div class='col-xs-12 col-sm-7'>
                  {{-- Adress --}}
                  <div class="form-group">
                      <label class="control-label col-sm-3" for="adress">Adress</label>
                      <div class='col-sm-9'>
                          <input type='text' id='adress' class='form-control' name='street' placeholder="Strees Adress and number" value='{{ $company->street }}'>
                      </div>
                  </div>


                  {{-- ZIP/City --}}
                  <div class="form-group">
                      <label class="control-label col-xs-12 col-sm-3" for="plz">ZIP/City</label>
                      <div class='col-xs-5 col-sm-3 col-sm-offset-0'>
                          <input type='text' id='plz' maxlength=5 class='form-control' name='plz' placeholder='code' value='{{ $company->plz }}'>
                      </div>
                      <div class='col-xs-7 col-sm-6 col-sm-offset-0'>
                          <input type='text' id='city' class='form-control' name='city' placeholder="Your cities name" value='{{ $company->city }}'>
                      </div>
                  </div>

                  {{-- State --}}
                  <div class="form-group">
                      <label class="control-label col-sm-3" for="state">State</label>
                      <div class='col-sm-9'>
                          <input type='text' id='state' class='form-control' name='state' placeholder='In which State do you life?' value='{{ $company->state }}'>
                      </div>
                  </div>

                  {{-- Country --}}
                  <div class="form-group">
                      <label class="control-label col-sm-3" for="country">Country</label>
                      <div class='col-sm-9'>
                          <input type='text' id='country' class='form-control' name='country' placeholder="What's your contries name" value='{{ $company->country }}'>
                      </div>
                  </div>
            </div>
        </div>
        {{-- END 2nd row --}}
        <div class='space_50'></div>


    </div>
@stop
