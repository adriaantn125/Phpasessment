<!-- Created by Adriaan van Niekerk -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p style="line-height: 137%;"><strong><span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">PHP DEVELOPER PRACTICAL ASSESSMENT</span></strong></p>
<p><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">&nbsp;</span></strong></p>
<p><strong><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">&nbsp;</span></strong></p>
<p style="line-height: 137%;"><span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">The purpose of this assessment is to assess the following abilities:</span></p>
<p><span style="font-size: 12.0pt; line-height: 115%; font-family: 'Times New Roman',serif;">&nbsp;</span></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<ol style="margin-top: 0cm;">
<li style="line-height: 137%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">Understanding of object oriented programming</span></li>
<li style="line-height: 137%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">Understanding of MVC patterns</span></li>
<li style="line-height: 137%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">Client - Server Application architecture (Rest Api)</span></li>
<li style="line-height: 137%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">Database modelling</span>&nbsp;&nbsp;&nbsp;</li>
<li style="line-height: 137%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">Data validation</span></li>
<li style="line-height: 137%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">Understanding of business requirements</span></li>
<li style="line-height: 137%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">Ability to make different tools to work in accordance to requirements</span></li>
</ol>
<p style="line-height: 137%;"><span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">&nbsp;</span></p>
<p style="line-height: 137%;"><strong><span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">Scenario:</span></strong></p>
<p style="line-height: 137%;"><strong><span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">&nbsp;</span></strong></p>
<p style="line-height: 137%;"><span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">You are required to build a basic shopping system system. The user should be able to top up an amount (in the currency of your choice) in order to buy the products. The products can be loaded in the database with prices. A user can only purchase one product at the time.</span></p>
<p style="line-height: 137%;"><span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">&nbsp;</span></p>
<p style="line-height: 137%;"><span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">The user should be able to purchase products using the amount topped-up, view his transactions(top ups and purchases), and see his current balance.</span></p>
<p style="line-height: 137%;"><span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;">The system should be able to calculate a discount for product purchases as follow:</span></p>
<ol>
<li style="line-height: 137%;"><span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;"> Price 50 &ndash; 100 : 0% discount</span></li>
<li style="line-height: 137%;"><span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;"> Price 112 &ndash; 115: 0.25% discount</span></li>
<li style="line-height: 137%;"><span style="font-size: 12.0pt; line-height: 137%; font-family: 'Times New Roman',serif;"> Price &gt; 120: 0.50% discount</span></li>
</ol>
<p style="line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span></p>
<p style="line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif; background: white;">Note: Discount price must be displayed along side with the total amount before and after discount before the user can confirm the purchase.</span></p>
<p style="line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif; background: white;">&nbsp;</span></p>
<p style="line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">Requirements:</span></strong></p>
<p style="line-height: normal;"><strong><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span></strong></p>
<ol>
<li style="line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"> The products and prices discount must be set by an admin user in a back-end application ( Preferably Laravel)</span></li>
</ol>
<p style="line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span></p>
<ol start="2">
<li style="line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"> The back-end application must contain an api to interact with a client application in order to serve products, prices, discount settings, user logins and registrations, purchases, top ups.</span></li>
</ol>
<p style="line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span></p>
<ol start="3">
<li style="line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;"> The users will use a client application (in angularJs) to perform the following:</span></li>
</ol>
<p style="line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span></p>
<p style="margin-left: 72.0pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">*register</span></p>
<p style="margin-left: 72.0pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">* login</span></p>
<p style="margin-left: 72.0pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">* top up their account</span></p>
<p style="margin-left: 72.0pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">* perform purchases</span></p>
<p style="margin-left: 72.0pt; line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">* View their transactions</span></p>
<p style="line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span></p>
<p style="line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span></p>
<p style="line-height: normal;"><span style="font-size: 12.0pt; font-family: 'Times New Roman',serif;">&nbsp;</span></p>
<p style="line-height: normal;">NB:</p>
<p style="line-height: normal;">&nbsp;</p>
<p style="margin-left: 36.0pt; line-height: normal;">* Please do not waste time in design, you can set up a basic bootstrap admin template for both backend and front-end application</p>
<p style="margin-left: 36.0pt; line-height: normal;">&nbsp;</p>
<p style="margin-left: 36.0pt; line-height: normal;">* Do not set it up on a domain, your apps can be stored on Github. Please care to share deployment steps in your Readme file</p>
<p style="line-height: normal;">&nbsp;</p>
<p style="line-height: normal;">&nbsp;</p>
<p>&nbsp;</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
