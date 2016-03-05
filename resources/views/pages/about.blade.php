@extends('pages.layout')



@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <h2>About</h2>
                <hr>
            <p>This program seeks to create an environment where singers can come together to train like vocal Olympians outside of the isolated studio.
                This program will focus on the training process of learning an opera to become singing actors.
                We believe people succeed in groups! This program is a one stop destination for intensive opera training to build repertoire and take artistic risks.
                </p>

                <p>Details: Cloverleaf Opera Program is located in CT 90 minutes outside of the New York City.  Over the course of the opera intensive,
                    singers will receive both individual and group instruction during the week. The tentative schedule is Monday through Friday. Mornings will consist of acting including movement,
                    dance, and group time followed by lunch. Afternoon will consist of a lecture/activity followed by rehearsal with vocal coachings held individually througout the week.
                    Weekends are for extra help, tech rehersals, and extra rehersals as needed.  Weekend attendance and availability is strongly encouraged but not mandatory.
                    </p>
                    <p>Transportation by limousine for NYC based singers or from tri state airports, housing accommodations, and food are available for an additional nominal fee once tuition is paid.
                    Tuition is $980 for this training program for new students only.   Instructors to be determined. One partial scholarship is available. No pre-casting!
                    Selections from the opera will be performed with staging in addition to original work created by the participants for peer to peer sharing.
                    The performance pieces will be staged and in costume.
                    </p>
            </div>
            <div class="col-md-4">
                <h2>Characters</h2>
                <hr>
                <ol>
                    <li>Hansel</li>
                    <li>Gretel</li>
                    <li>Mother</li>
                    <li>Father</li>
                    <li>Sandman</li>
                    <li>Dew Fairy</li>
                    <li>Witch</li>
                    <li>Gingerbread Children/Ensemble</li>
                </ol>
                <h2>Contact Info:</h2>
                <p>Cloverleafopera@yahoo.com</p>
                <p>203-788-2624</p>
                <div><img alt="Hansel and Gretel" src="image/operalady.gif" style="width: 315px; height:315px;"></div><br>

            </div>

        <div class="col-md-4">
               <h2>NO APPLICATION FEE</h2>
                <hr>
                <h3>TO APPLY EMAIL THE FOLLOWING INFORMATION TO:</h3>
                <p>Cloverleafopera@yahoo.com</p>
                <p>Name</p>

                <p>Phone #</p>

                <p>Resume</p>

                <p>Voice type</p>

                <p>Hansel and Gretel role(s) you would like to be considered for</p>

                                   <p>City and State you are traveling from</p>

                                    <p>Will you need transportation?</p>
                                    <p>Will you need housing?</p>

                                    <p>Describe any German Language ability.</p>

                                    <p>Describe your experience with dance, if any.</p>

                                    <p>Please send a youtube video, sound track, or website address of yourself with your reply</p>


            </div>
        </div>
        <hr>
        <footer>
            <p>@2015 - Web Design by Paul Bertolami</p>
        </footer>
        <div class="row">
            <div class="col-md-12">
                <canvas id="mycanvas" width="256" height="256"></canvas>
                <script>
                    $(document).ready(function(){
                        var ctx = $('#mycanvas').get(0).getContext("2d");
                        //pie chart data
                        //sum of values = 360
                        var data = [
                            {
                                value: 270,
                                color: "cornflowerblue",
                                highlight: "lightskyblue",
                                label: "Corn Flour Blue"
                            },
                            {
                                value: 50,
                                color: "lightgreen",
                                highlight: "yellowgreen",
                                label: "Lightgreen"
                            },
                            {
                                value: 40,
                                color: "orange",
                                hightlight: "darkorange",
                                label: "Orange"
                            }
                                ];
                        //draw
                        var piechart = new Chart(ctx).Pie(data);
                      });

                </script>
            </div>
        </div>


    </div>