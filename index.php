<!DOCTYPE html>
<html>
    <head>
        <title>Body Language</title>
         <link rel="stylesheet" href="main.css"/>
         <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.js"></script>
        
        <script src="script.js" type="text/javascript"></script>
    </head>
    
    <body>
        
        <!-- Home Page -->
        <div data-role="page" id="home">
            
            <div data-role="header">
            <h1>Body Language</h1>
            </div>
            
            
            <div data-role="content">
                <br/>
                <div data-role="text">
                    <input type="text" name="expression" id="expression" placeholder="Expression"/>
                </div>    
                
                <br/>
                <div data-demo-html="true">
                    <form>
                        <select name="feelings" id="feelings">
                            <option>Feeling</option>
                            <option value="1">Happy</option>
                            <option value="2">Angry</option>
                            <option value="3">Sad</option>
                            <option value="4">Excited</option>
                            <option value="5">Tired</option>
                        </select>
                    </form>
                </div>
                
                <br/>
                <div>
                    <form>
                        <select name="bodypart" id="bodypart">
                            <option>Body Part</option>
                            <option value="1">Head</option>
                            <option value="2">Eyes</option>
                            <option value="3">Nose</option>
                            <option value="4">Mouth</option>
                            <option value="5">Tongue</option>
                            <option value="6">Ear</option>
                            <option value="7">Arm</option>
                            <option value="8">Hand</option>
                            <option value="9">Finger</option>
                            <option value="10">Stomach</option>
                            <option value="11">Waist</option>
                            <option value="12">Leg</option>
                            <option value="13">Thigh</option>
                            <option value="14">Feet</option>
                        </select>
                    </form>
                </div>
                
                <br/>
                <form onclick="getexpr()">
                    <div>
                        <input type="submit" value="Search" id="submit_btn"/>
                    </div>
                </form>
                    
                
            </div> <!-- End of content -->
            
            <div data-role="footer">
                <h1>Copyright, 2014. Peter Xu</h1>
            </div>

        </div> <!-- End of home -->            

        
        <!-- Results Page -->
        <div data-role="page" id="results">
            <div data-role="header">
                <h1>Results</h1>
            </div>
            
            <div data-role="content">
            </div>
            
            <div data-role="footer">
                <h1>Copyright, 2014. Peter Xu</h1>
            </div>
            
        </div> <!-- End of Results -->
        
    </body>
</html>