<style>

    @page {
            margin: 100px 25px;
        }

    #border {
        border: 1px solid black;
        height: 270mm;
    }

    .container-fluid {
        padding: 3mm;
    }

    table {
        border-top: 1px solid;
        border-bottom: 1px solid;
        width: 90%;
        font-family: 'Arial Narrow', Arial, sans-serif;
    }

    #company-details table {
        line-height: 9pt;
    }

    .row th,
    .row td {
        padding: 6px;
        padding-right: 20px;
        font-size: 11.5pt;
    }

    #table-detail tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    h2,
    h3,
    p {
        font-family: 'Arial Narrow', Arial, sans-serif;
    }

    #company-details {
        float: right;
        width: 60%;
        padding-left: 10cm;
    }

    #company-image {
        width: 30%;
        float: left;
    }

    header {
        position: fixed;
        top: -60px;
        left: 0px;
        right: 0px;
        height: 50px;
    }

    #header-info {
        border: none;
        width: 8cm;
        table-layout: fixed;
    }

    p {
        font-size: 11.5pt;
    }

    li {
        line-height: 18pt;
        font-family: 'Arial Narrow', Arial, sans-serif;
        font-size: 11.5pt;
    }
    footer{
        position: fixed; 
        bottom: -60px; 
        left: 0px; 
        right: 0px;
        height: 50px;
    }
</style>


    <body>
        <!--header place-->
        <header>
            <center>
                <h3>USD Statement</h3>
            </center>
            <div class="d-flex">
                <div id="company-image">
                    <img src="assets/images/{{ $profile->logo }}" alt="{{ $profile->logo }}" class="rounded-circle" height="100px">
                </div>
                <div id="company-details">
                    <table id="header-info">
                    <tr>
                            <td>{{ $profile->name }}</td>
                        </tr>
                        <tr>
                            <td>{{ $profile->physical_address }}</td>
                        </tr>
                        <tr>
                            <td>{{ $profile->email_address }}</td>
                        </tr>
                        <tr>
                            <td>{{ $profile->phone }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </header>
        
        <div class="row">
                    <div class="col md-6">
                        <div class="card-header">
                            <h4>{{$user->firstname . ' ' . $user->lastname}}</h4>
                            <h5>{{$student->Account}}</h5>
                            <h6>{{$user->email}}</h6>
                        </div>
            </div>  
    </div>
    <hr>
    <div class="row">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr align="center">
                                <th>Date</th>
                                <th>Reference</th>
                                <th>Description</th>
                                <th>Debit</th>
                                <th>Credit</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($fees as $key => $trans)
                            <tr>
                                <td><span style="font-size:9pt;">{{$trans->TxDate}}</span></td>
                                <td><span style="font-size:9pt;">{{$trans->Reference}}</span></td>
                                <td><span style="font-size:9pt;">{{$trans->Description}}</span></td>
                                <td><span style="font-size:9pt;">{{$trans->fForeignDebit}}</span></td>
                                <td><span style="font-size:9pt;">{{$trans->fForeignCredit}}</span></td>
                              
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
            </div>
        </div>

    </div>
    </div>
    
    
    <footer>

        <table width="100%" style="vertical-align: bottom; font-family: serif; font-size: 10pt; color: #000000;">
            <tr>
                <td width="70%">{{\Carbon\Carbon::now()->format('l jS \\of F Y')}}</td>
                <td width="30%" align="right">Powered By OLIMEM</td>
            </tr>
        </table>
        <br /> <br /> <br />
    </footer>

    </body>

