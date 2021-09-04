
       
   


    <table class="table">
            <tr class="text-center">
                <td style="width: 30%" > <img height="60" width="60" src="https://seeklogo.com/images/B/bangladesh-primary-education-logo-1DD062E046-seeklogo.com.png" alt="" srcset=""> </td>
                <td style="width: 60%" >
                    <h6>ABC School</h6>
                    <p>Address</p>
                    <i>Academic Result Sheet</i> <br>
                    <strong>1st Term Examination - 2021</strong> <br>
                    <strong>Class: 1 </strong>
                    <strong>Year : 2020 </strong>
                    
                </td>
                <td style="width: 30%">
                    <img height="60" width="60" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8VqpuId2TXaNrEw8cXPk59zAeD23iSDkJQmATTxo41fTu26lf7jhOyCcW5px_Uxb_co4&usqp=CAU" alt="" srcset="">
                </td>
            </tr> 
    </table>



    <table class="table">

        <tr>
            <td>SL</td>
            <td>ID No</td>
            <td>Student Name</td>
            <th>Result</th>
        </tr>

       @if ($results)
        @foreach ($results as $index=>$result)

        @php
            $totalMark = 0;
            $subjectPoint = 0;
            $totalPoint = 0;
            $avgPoint = 0;
            $countSubject = 0;
            $checkResult = true;
        @endphp

            @if ($result->resultSheet)


                
            @foreach ( $result->resultSheet as $key=>$markSheet)
                @php
                    ++$countSubject;
                @endphp

                @php
                    $totalMark =  $totalMark + $markSheet->mark;
                @endphp

                @if ($markSheet->mark >= 80)
                    @php
                        $subjectPoint = 5.00;
                    @endphp
                @elseif($markSheet->mark >= 70)
                    @php
                        $subjectPoint = 4.00;
                    @endphp
                @elseif($markSheet->mark >= 60)
                    @php
                        $subjectPoint = 3.50;
                    @endphp
                @elseif($markSheet->mark >= 50)
                    @php
                        $subjectPoint = 3.00;
                    @endphp
                @elseif($markSheet->mark >= 40)
                    @php
                        $subjectPoint = 2.00;
                    @endphp
                @elseif($markSheet->mark >= 33)
                    @php
                        $subjectPoint = 1.00;
                    @endphp
                @else 
                    @php
                        $checkResult = false;
                    @endphp
                @endif

                @php
                    $totalPoint =  $totalPoint + $subjectPoint;
                @endphp

            @endforeach

            @php
                $avgPoint = $totalPoint/$countSubject;
            @endphp


                
            @endif


            <tr>
                <td>{{++$index}}</td>
                <td>{{$result->student->id_no}}</td>
                <td>{{$result->student->first_name}} {{$result->student->last_name}}</td>
                <td> 
                    @if ($checkResult)
                    {{$avgPoint}}
                    @else
                        Fail
                    @endif 
                </td>
            </tr>
        @endforeach
           
       @endif
       

   

      




    </table>

 

    <br><br>
    <table class="table text-center">
        <tr>
            <td>
                <hr>
                <p>Teacher</p>
                
            </td>
            <td>
                <hr>
            <p>Seal</p> 
            </td>
            <td> 
                <hr>
                <p>Headmaster</p>
            </td>
        </tr>
    </table>

