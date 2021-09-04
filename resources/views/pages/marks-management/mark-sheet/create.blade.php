
       
    @php
        $totalMark = 0;
        $subjectPoint = 0;
        $totalPoint = 0;
        $avgPoint = 0;
        $countSubject = 0;
        $checkResult = true;
    @endphp


    <table class="table">
            <tr class="text-center">
                <td style="width: 30%" > <img height="60" width="60" src="https://seeklogo.com/images/B/bangladesh-primary-education-logo-1DD062E046-seeklogo.com.png" alt="" srcset=""> </td>
                <td style="width: 60%" >
                    <h6>ABC School</h6>
                    <p>Address</p>
                    <i>Academic Transcript</i> <br>
                    <strong>1st Term Examination - 2021</strong>
                    
                </td>
                <td style="width: 30%">
                    <img height="60" width="60" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8VqpuId2TXaNrEw8cXPk59zAeD23iSDkJQmATTxo41fTu26lf7jhOyCcW5px_Uxb_co4&usqp=CAU" alt="" srcset="">
                </td>
            </tr> 
    </table>
    <table class="table">
        <tr >
            <td style="width: 50%" >
                <table>

                    <tr>
                        <td>
                            Student ID
                        </td>
                        <td>
                            {{$student->id_no}}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Student Name
                        </td>
                        <td>
                            {{$student->first_name}} {{$student->last_name}}
                        </td>
                    </tr> 
                    
                    <tr>
                        <td>
                            Father Name
                        </td>
                        <td>
                            {{$student->father_name}}
                        </td>
                    </tr>  

                    <tr>
                        <td>
                            Mother Name
                        </td>
                        <td>
                            {{$student->mother_name}}
                        </td>
                    </tr>  

                    <tr>
                        <td>
                        Class
                        </td>
                        <td>
                            1
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Year
                        </td>
                        <td>
                            142545
                        </td>
                    </tr>

                  

                </table>

            </td>
            <td style="width: 50%" >
                <table>
                    <tr>
                        <td>Letter Grade</td>
                        <td>Marks Interval</td>
                        <td>Grade Point</td>
                    </tr>

                    <tr>
                        <td>A+</td>
                        <td>80-100</td>
                        <td>5</td>
                    </tr>

                    <tr>
                        <td>A</td>
                        <td>70-79</td>
                        <td>4.00 - 4.99</td>
                    </tr>

                    <tr>
                        <td>A-</td>
                        <td>60-69</td>
                        <td>3.50 - 4.49</td>
                    </tr>

                    <tr>
                        <td>B</td>
                        <td>50-59</td>
                        <td>3.00 - 3.99</td>
                    </tr>

                    <tr>
                        <td>C</td>
                        <td>40-49</td>
                        <td>2.00 - 2.99</td>
                    </tr>

                    <tr>
                        <td>D</td>
                        <td>33-39</td>
                        <td>1.00 - 1.99 </td>
                    </tr>

                    <tr>
                        <td>F</td>
                        <td>0-32</td>
                        <td>0.00 - 0.99</td>
                    </tr>


                </table>

            </td>
        </tr>
    </table>

    <table class="table">

        <tr>
            <td>SL</td>
            <td>Subjects</td>
            <td>Full Marks</td>
            {{-- <td>Highest Marks</td> --}}
            <td>Obtained Marks</td>
            <td>Letter Grade</td>
            <td>Grade Point</td>
        </tr>

       

        @if ($markSheets)

            @foreach ( $markSheets as $key=>$markSheet)
                @php
                    ++$countSubject;
                @endphp

                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$markSheet->assignSubject->subject->name}}</td>
                    <td>{{$markSheet->assignSubject->full_mark}}</td>
                    {{-- <td>90</td> --}}
                    <td>
                        {{$markSheet->mark}}
                    
                        @php
                            $totalMark =  $totalMark + $markSheet->mark;
                        @endphp

                     
                    
                    </td>
                    <td>
                        @if ($markSheet->mark >= 80)
                            A+
                        @elseif($markSheet->mark >= 70)
                            A
                        @elseif($markSheet->mark >= 60)
                            A-
                        @elseif($markSheet->mark >= 50)
                            B
                        @elseif($markSheet->mark >= 40)
                            C
                        @elseif($markSheet->mark >= 33)
                            D
                        @else 
                            F

                        @endif
                    </td>
                    <td>
                        @if ($markSheet->mark >= 80)
                            5.00
                            @php
                                $subjectPoint = 5.00;
                            @endphp
                        @elseif($markSheet->mark >= 70)
                            4.00
                            @php
                                $subjectPoint = 4.00;
                            @endphp
                        @elseif($markSheet->mark >= 60)
                            3.50
                            @php
                                $subjectPoint = 3.50;
                            @endphp
                        @elseif($markSheet->mark >= 50)
                            3.00
                            @php
                                $subjectPoint = 3.00;
                            @endphp
                        @elseif($markSheet->mark >= 40)
                            2.00
                            @php
                                $subjectPoint = 2.00;
                            @endphp
                        @elseif($markSheet->mark >= 33)

                            @php
                                $subjectPoint = 1.00;
                            @endphp
                            1.00
                        @else 
                            F
                           @php
                               $checkResult = false;
                           @endphp
                        @endif

                        @php
                             $totalPoint =  $totalPoint + $subjectPoint;
                            
                        @endphp
                    </td>
                </tr>
                
            @endforeach
            
        @endif

       @php
           $avgPoint = $totalPoint/$countSubject;
       @endphp
        <tr>
            <td colspan="3">Total  Marks</td>
            {{-- <td>600</td> --}}
            <td colspan="3">{{ $totalMark}}</td>
        </tr>



    </table>

    <table class="table">
        <tr>
            <td>
                Result
            </td>
            <td>
                @if ($checkResult)
                    Pass
                @else

                    Fail
                    
                @endif
            </td>
        </tr>
        <tr>
            <td>
                GPA
            </td>
            <td>
                @if ($checkResult)
                {{$avgPoint}}
                @else

                    0.00
                    
                @endif
               
            </td>
        </tr>
        <tr>
            <td>Remark</td>
            <td>Good</td>
        </tr>
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

