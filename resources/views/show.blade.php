@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Donation Request Detail</div>

                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                        <tr class="bg-info">
                        <tr>
                            <td>Donation Request ID</td>
                            <td><?php echo ($donationrequest['id']); ?></td>
                        </tr>
                        <tr>
                            <td>Name of Organization</td>
                            <td><?php echo ($donationrequest['requester']); ?></td>
                        </tr>
                        <tr>
                            <td>Type of Organization</td>
                            <td><?php echo ($donationrequest['requester_type']); ?></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><?php echo ($donationrequest['first_name']); ?> <?php echo ($donationrequest['last_name']); ?></td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td><?php echo ($donationrequest['email']); ?></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><?php echo ($donationrequest['phone_number']); ?></td>
                        </tr>
                        <tr>
                            <td>Address 1</td>
                            <td><?php echo ($donationrequest['street_address1']); ?></td>
                        </tr>
                        <tr>
                            <td>Address 2</td>
                            <td><?php echo ($donationrequest['street_address2']); ?></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><?php echo ($donationrequest['city']); ?></td>
                        </tr>
                        <tr>
                            <td>State</td>
                            <td><?php echo ($donationrequest['state']); ?></td>
                        </tr>
                        <tr>
                            <td>Zip Code</td>
                            <td><?php echo ($donationrequest['zipcode']); ?></td>
                        </tr>
                        <tr>
                            <td>Tax Exempt</td>
                            <td><?php echo ($donationrequest['tax_exempt']); ?></td>
                        </tr>
                        <tr>
                            <td>Request For</td>
                            <td><?php echo ($donationrequest['item_requested']); ?></td>
                        </tr>
                        <tr>
                            <td>Donation Purpose</td>
                            <td><?php echo ($donationrequest['item_purpose']); ?></td>
                        </tr>
                        <tr>
                            <td>Event Name</td>
                            <td><?php echo ($donationrequest['event_name']); ?></td>
                        </tr>
                        <tr>
                            <td>Event Start Date</td>
                            <td><?php echo date("m/d/Y", strtotime($donationrequest['event_start_date'])); ?></td>
                        </tr>
                        <tr>
                            <td>Event End Date</td>
                            <td><?php echo date("m/d/Y", strtotime($donationrequest['event_end_date'])); ?></td>
                        </tr>
                        <tr>
                            <td>Event Purpose</td>
                            <td><?php echo ($donationrequest['event_purpose']); ?></td>
                        </tr>
                        <tr>
                            <td>Estimated Number Of Attendes</td>
                            <td><?php echo ($donationrequest['est_attendee_count']); ?></td>
                        </tr>
                        <tr>
                            <td>Event Venue or Address</td>
                            <td><?php echo ($donationrequest['venue']); ?></td>
                        </tr>
                        <tr>
                            <td>What are the marketing opportunities?</td>
                            <td><?php echo ($donationrequest['marketing_opportunities']); ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <br><br>
                    <div style="text-align:center">
                        <a href="{{ route('donationrequests.index')}} " class="btn btn-primary">Return to List</a>
                    </div>
                    <br>
                </div>

                </div>
            </div>
        </div>
    </div>

@stop