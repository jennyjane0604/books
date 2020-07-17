@extends('message.messageLayout')

@section('titletext')
     New Message Entry
@endsection

@section('pageContent')
    <section class="row" style="margin: 0;">

         <section class="col-sm-2" style="margin: 0;"></section>
         <section class="col-sm-8" style="margin: 0;">
             <form action="{{ url('/') }}" method="post">
                 {{ csrf_field() }}
                 <table class="table">
                     <tr>
                         <td class="form-group">
                           <section class="form-text">Guest Name</section>
                         </td>
                         <td class="form-group">
                           <section><input type="text" name="guestname" size="30" class="form-control"></section>
                         </td>
                     </tr>
                     <tr>
                         <td class="form-group">
                           <section class="form-text">Message</section>
                         </td>
                         <td class="form-group">
                           <section><textarea name="message" id="" cols="20" rows="10" draggable="false" style="resize:none;" class="form-control"></textarea></section>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <section style="text-align: center;">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                 <button type="reset" class="btn btn-danger">Clear</button>
                             </section>
                         </td>
                     </tr>
{{--                     @if($validation)--}}
{{--                         @if($validation->has('guestname'))--}}
{{--                         <tr>--}}
{{--                            <td colspan="2">--}}
{{--                                 --}}
{{--                            </td> --}}
{{--                         </tr>--}}
{{--                     @endif    --}}
                 </table>
             </form>
         </section>
         <section class="col-sm-2" style="margin: 0;"></section>
    </section>
@endsection
