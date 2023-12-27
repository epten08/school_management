<style>
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

    #header {
        height: 3.7cm;
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
</style>

<div id="border">
    <div class="container-fluid">
        <!--header place-->
        <div id="header">
            <div class="d-flex">
                <div id="company-image">
                    <img src="storage/logo/{{ $profile->logo }} " alt="logo" class="rounded-circle" height="100px">
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
        </div>
    </div>
</div>