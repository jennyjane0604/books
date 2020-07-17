<section class="row" style="margin: 0; height: 85vh;">
    <section class="col-sm-1"></section>
    <section class="col-sm-10">
        <table class="table" id="messagestable">
            <thead>
                <tr class="table-head">
                    <th>Message No.</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Guest Name</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
            @foreach($allMessages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ date('M d, Y',strtotime($message->date_received)) }}</td>
                    <td>{{ date('h:i:sa',strtotime($message->date_received)) }}</td>
                    <td>{{ $message->guestname }}</td>
                    <td>{{ $message->message }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
    <section class="col-sm-1"></section>
</section>
<section class="row" style="margin:0;">
    <section class="col-sm-12" >
        {{ $allMessages->links() }}
    </section>
</section>

