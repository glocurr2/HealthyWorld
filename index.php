<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>Healthy World Cafe Quiz</title>
<meta name="description" content="healthy world cafe">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<link rel="stylesheet" type="text/css" href="css/hwstyles.css">

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73459053-3', 'auto');
  ga('send', 'pageview');

</script>


</head>

<body> 


<div id ="container" >
<header id="header">
<div id="header-mainimage">
<div id="quizname">What Is <i>Your</i> Health Quotient?</div>
</div>
</header>
	
    
<section id = "content">

    
    	
<div id="quiz" ng-app="quizApp" ng-controller="quizCtrl" >
	<div id="heading1"><div ng-show="q < 11">Answer These 10 Questions to Find Out Your Health Quotient!</div>
    <div id="result-score" ng-show="q > 10">Your Health Quotient Score: {{score}}</div>
    </div>
<form name="form1" method="post" action="">


<!--question 1-->
<div class="question-block" ng-hide="q < 1 || q > 1" >
<div class="question">1) If I had to choose the  most important area of my life to focus on currently, it would be:</div>
<div class="answers">
    <input type="radio" name="question1" id="question1a" value="radio" class="label-indent"  ng-click="q = q + 1; score = score + 6" > <label for="question1a">Spirituality, enlightenment, spiritual growth
  </label><br/>
   <input type="radio" name="question1" id="question1b" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 1"> <label for="question1b">The acquisition of money, financial security
  </label><br/>
    <input type="radio" name="question1" id="question1c" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 5"> <label for="question1c">The health of my body, feeling better
  </label><br/>
    <input type="radio" name="question1" id="question1d" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 5"> <label for="question1d">Psychological development and growth
  </label><br/>
    <input type="radio" name="question1" id="question1e" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 4"> <label for="question1e">Intellectual pursuits
  </label><br/>
    <input type="radio" name="question1" id="question1f" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question1f">Enjoyment of life, fun and relaxation
  </label>
</div>
</div>


<!--question 2-->
<div class="question-block" ng-hide="q < 2 || q > 2" >
<div class="question">2) If I had to review my life I would say that ''I have':</div>
<div class="answers">
  
    <input type="radio" name="question2" id="question2a" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 1"> <label for="question2a">Done most of what I set out to do in every area of my life
  </label><br/>

    <input type="radio" name="question2" id="question2b" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 5"> <label for="question2b">Accomplished some things but I am still pursuing my life goals
  </label><br/>

   <input type="radio" name="question2" id="question2c" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question2c">Was on the right track to becoming whom or what I wanted to be and  became derailed
  </label><br/>

    <input type="radio" name="question2" id="question2d" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 4"> <label for="question2d">Still starting, exploring what I need and which way to go
  </label>
</div>
</div>


<!--question 3-->
<div class="question-block" ng-show="q > 2 && q < 4">
<div class="question">3) I  have tried the following:</div>
<div class="answers">
    <input type="radio" name="question3" id="question3a" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question3a">Haven't got a clue
  </label><br/>
    <input type="radio" name="question3" id="question3b" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question3b">Yoga
  </label><br/>
    <input type="radio" name="question3" id="question3c" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question3c">Qigong
  </label><br/>
    <input type="radio" name="question3" id="question3d" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question3d">Tai Chi
  </label><br/>
    <input type="radio" name="question3" id="question3e" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question3e">Karate
  </label><br/>
    <input type="radio" name="question3" id="question3f" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question3f">Martial arts
  </label><br/>
    <input type="radio" name="question3" id="question3g" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 0"> <label for="question3e">None of the above
  </label>
</div>
</div>


<!--question 4-->
<div class="question-block" ng-show="q > 3 && q < 5">
<div class="question">4) I have had problems with the following physical or BODY areas:</div>
<div class="answers">
    <input type="radio" name="question4" id="question4a" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question4a">Weight loss or gain
  </label><br/>
    <input type="radio" name="question4" id="question4b" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question4b">Aches and pains
  </label><br/>
    <input type="radio" name="question4" id="question4c" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 1"> <label for="question4c">Physical aptitudes towards sports
  </label><br/>
    <input type="radio" name="question4" id="question4d" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 4"> <label for="question4d">Overall feeling of connectedness with my body
  </label><br/>
    <input type="radio" name="question4" id="question4e" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question4e">The appearance of my body
  </label><br/>
    <input type="radio" name="question4" id="question4f" value="radio" class="label-indent"  ng-click="q = q + 1; score = score + 4"> <label for="question4f">Combating an illness
  </label><br/>
    <input type="radio" name="question4" id="question4g" value="radio" class="label-indent"  ng-click="q = q + 1; score = score + 1"> <label for="question4g">I am completely aware, comfortable, and even proud of my physical self
  </label>
</div>
</div>


<!--question 5-->
<div class="question-block" ng-show="q > 4 && q < 6">
<div class="question">5) In the past decade do you feel the world has become:</div>
<div class="answers">
    <input type="radio" name="question5" id="question5a" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 4"> <label for="question5a">A more spiritual place with which you feel attuned
  </label><br/>
    <input type="radio" name="question5" id="question5b" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question5b">A less spiritual place with many people totally out of touch with themselves or others
  </label><br/>
    <input type="radio" name="question5" id="question5c" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question5c">A place of mere survival that you must constantly protect yourself in.
  </label><br/>
    <input type="radio" name="question5" id="question5d" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question5d">A harsh reality in which there is no hope
  </label><br/>
    <input type="radio" name="question5" id="question5e" value="radio" class="label-indent"  ng-click="q = q + 1; score = score + 4"> <label for="question5e">A world that is a  mixture  of happiness and sorrow and you must work to sort out the good and bad in  your life accordingly.
  </label><br/>
    <input type="radio" name="question5" id="question5f" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question5f">A world or reality of “Live and Let live, in which we regard only are own lives and ignore what else is out there
  </label><br/>
    <input type="radio" name="question5" id="question5g" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 1"> <label for="question5g">Nirvana
  </label>
</div>
</div>


<!--question 6-->
<div class="question-block" ng-show="q > 5 && q < 7">
<div class="question">6) When I feel tired, run down or out of sorts I:</div>
<div class="answers">
    <input type="radio" name="question6" id="question6a" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 5"> <label for="question6a">Take vitamins, supplements and or herbs
  </label><br/>
    <input type="radio" name="question6" id="question6b" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 5"> <label for="question6b">Use aromatherapy and or healing crystals
  </label><br/>
    <input type="radio" name="question6" id="question6c" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question6c">Take a warm bath and relax
  </label><br/>
    <input type="radio" name="question6" id="question6d" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 4"> <label for="question6d">Use some type mind /body relaxation technique  such as massage, meditation, yoga, qigong
  </label><br/>
    <input type="radio" name="question6" id="question6e" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question6e">Engage in my favorite exercise program to force the endorphins to flow
  </label><br/>
    <input type="radio" name="question6" id="question6f" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 1"> <label for="question6f">Keep busy at work or play, to forget my tiredness
  </label><br/>
    <input type="radio" name="question6" id="question6g" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 1"> <label for="question6g">Ignore my feelings altogether, it will pass
  </label>
</div>
</div>


<!--question 7-->
<div class="question-block" ng-show="q > 6 && q < 8">
<div class="question">7) If you were told that you can affect the world around you and your  own life successes love, happiness etc. by just by how you approached life and your  own thoughts, would you:</div>
<div class="answers">
    <input type="radio" name="question7" id="question7a" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 1"> <label for="question7a">Think that the statement is ridiculous and tend to ignore it
  </label><br/>
    <input type="radio" name="question7" id="question7b" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question7b">Look at the world around you to see if there were examples of it or some impactful truth to it
  </label><br/>
    <input type="radio" name="question7" id="question7c" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 4"> <label for="question7c">Be intrigued and investigate the source from which the ideas came , looking for additional reading material
  </label><br/>
    <input type="radio" name="question7" id="question7d" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 4"> <label for="question7d">Go to lectures of those who espouse knowledge in this area
  </label><br/>
    <input type="radio" name="question7" id="question7e" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question7e">Look to affirm the statement by practices in your own life
  </label><br/>
    <input type="radio" name="question7" id="question7f" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question7f">Already agree with the statement and see it working in your own life
  </label>
</div>
</div>


<!--question 8-->
<div class="question-block" ng-show="q > 7 && q < 9">
<div class="question">8) The environment has become very polluted on so many levels, effecting all the elements of life fire, air, water and earth, which in turn affects our own health. Do you feel:</div>
<div class="answers">
    <input type="radio" name="question8" id="question8a" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 5"> <label for="question8a">This statement is true and that it directly affects your own well being.
  </label><br/>
    <input type="radio" name="question8" id="question8b" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 1"> <label for="question8b">This is an exaggeration of media and our culture of sensationalism .We just need to keep going as we are, doing what we have been and everything will be okay. Things always run in cycles.
  </label><br/>
    <input type="radio" name="question8" id="question8c" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question8c">Look to measures that we can do on a personal level and a global level to make changes
  </label><br/>
    <input type="radio" name="question8" id="question8d" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 4"> <label for="question8d">Take precautionary and protective measures in our own homes and for our bodies, such as reducing EMF’s and shielding devices for certain technologies
  </label><br/>
    <input type="radio" name="question8" id="question8e" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 4"> <label for="question8e">Look to alternative sources of energy to make the first step
  </label>
</div>
</div>

<!--question 9-->
<div class="question-block" ng-show="q > 8 && q < 10">
<div class="question">9) The belief in an afterlife or what happens to us  when we die:</div>
<div class="answers">
    <input type="radio" name="question9" id="question9a" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 1"> <label for="question9a">Is a religious concern and not worth of consideration in the concepts of health and well being
  </label><br/>
    <input type="radio" name="question9" id="question9b" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 1"> <label for="question9b">Does not affect my life because I am enjoying what I have here and now
  </label><br/>
    <input type="radio" name="question9" id="question9c" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question9c">Became an issue of consideration after a trauma in my life and has affected every part of my life including my health physical , emotional etc.
  </label><br/>
    <input type="radio" name="question9" id="question9d" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question9d">Is something I think about from time to time when I see the news or listen to a broadcast about a terrible tragedy
  </label><br/>
    <input type="radio" name="question9" id="question9e" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 4"> <label for="question9e">Is a firm belief of mine of which I have no doubts
  </label><br/>
    <input type="radio" name="question9" id="question9f" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 3"> <label for="question9f">Is tied in with my search for spiritual growth and I  have not decided on its validity
  </label><br/>
    <input type="radio" name="question9" id="question9g" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 1"> <label for="question9g">I have no belief in an afterlife, I think  these concepts are not our concern and do not affect our life or growth and development as people
  </label>
</div>
</div>

<!--question 10-->
<div class="question-block" ng-show="q > 9 && q < 11">
<div class="question">10) Music and certain sounds have been found to be a great way to stimulate thought, or brain wave and to help relax or to stimulate action during exercise.</div>
<div class="answers">
    <input type="radio" name="question10" id="question10a" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question10a">Have you used music or sound  therapy with success for relaxation techniques
  </label><br/>
    <input type="radio" name="question10" id="question10b" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question10b">Found that it  worked  for a multitudes of therapies
  </label><br/>
    <input type="radio" name="question10" id="question10c" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question10c">Listened to music during massages or Reiki
  </label><br/>
    <input type="radio" name="question10" id="question10d" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 2"> <label for="question10d">Tried sounds or music for psychological therapies such as to deal with anxiety or phobias
  </label><br/>
    <input type="radio" name="question10" id="question10e" value="radio" class="label-indent" ng-click="q = q + 1; score = score + 1"> <label for="question10e">Listen to certain music during work out routines
  </label>
</div>
</div>

<!--result1-->


<div class="question-block" ng-show="q > 10 && score < 18">
<div class="result">Rating PEA (Primary focus is on existence itself and general body awareness.) You are starting the journey of awareness through the physical senses. Your environment and relationships with others as well as your own self awareness is key to your growth and development. You may try to become more attuned to what is around you by becoming more involved with nature . Recommendations: You may try walks in nature on a regular basis, finding trails in the park or walking paths that bring you near water or the feel of the earth. Share these walks with friends.
</div>
<input type="button" name="startover1" id="startover1" value="Start Over" ng-click="reset()">
</div>

<!--result2-->
<div class="question-block" ng-show="q > 10 && score > 17 && score < 25">
<div class="result">Rating  PBP (Primary  focus is for the Physical body its positioning in relation to others and awareness of the self in relation to the outside environment and the material world.) The appreciation for you is on the primary senses. There is a definite body awareness and it is relative to the surroundings that you find yourself in, whether you have purposely placed yourself there or through happenstance. Spiritual connections are not really made or bonded yet so you have room for growth and development.  Social connections appear loose, scattered, confused  or lacking cohesiveness. Recommendations: You may want to choose a spiritual topic of interest and start the exploration. Make sure the exploration includes the development of your body energy and creating mind body synergy, such as looking at the chakras(The energy centers) or stress reduction in relation to massage technique or perhaps qigong and tai chi for stabilizing and energy flow.</div>
<input type="button" name="startover2" id="startover2" value="Start Over" ng-click="reset()">
</div>

<!--result3-->
<div class="question-block" ng-show="q > 10 && score > 24 && score < 30">
<div class="result">Rating HWB (Primary  focus is on the  Health and Welfare of the Physical body and how it relates to the earth and the elements. )  You have an appreciation for the body's interaction with the environment in general and continued testing of what one can accomplish.  You mentally question the reasoning of the why's and how's of the universe and have a general insight into the spiritual world through nature. It may be time to explore some additional avenues of where you are going and how you will get there through some internal exploration. Recommendations: You may want  to try meditation, massage and/or Reiki.</div>
<input type="button" name="startover3" id="startover3" value="Start Over" ng-click="reset()">
</div>

<!--result4-->
<div class="question-block" ng-show="q > 10 && score > 29 && score < 34">
<div class="result">Rating  HBA (Primary focus  is on  the Health of the Physical Body and a basic Awareness for the spiritual side of the self) Your health and body awareness are of maximum concern whether you are very  active and  taking care of  your body or whether you have ignored this side and are now considering how to regain the original zest for life. You are starting to become aware on a spiritual level but you are still testing concepts and ideologies. Recommendations: It may be wise for you to try and mix body awareness with your spiritual endeavors by engaging in mind / body activities which will ultimately lead to greater spiritual awareness and open you to additional social opportunities.</div>
<input type="button" name="startover4" id="startover4" value="Start Over" ng-click="reset()">
</div>

<!--result5-->
<div class="question-block" ng-show="q > 10 && score > 33 && score < 39">
<div class="result">Rating SPS (Primary  Focus is on Spiritual Energy  and how it relates  to the body  and  the Physical environment  which includes but not exclusive to  a Social setting). You have a high internal spiritual awareness as well as a  general social awareness.  However, your concentration can fluctuate between all the energies out there. You should try to stay as balanced as you can, otherwise you will become scattered and the healing energy for your body can dissipate. You do seem to stay regularly in tune with your body on a physical level and how it reacts to environmental stimuli.  Since you are a social being but serious in relationships, you may become too exclusive in your interactions. Recommendations : You may want to give yourself space  and time for all the dimensions of you  and also attempt to open yourself to new social experiences within a guided and safe framework.</div>
<input type="button" name="startover5" id="startover5" value="Start Over" ng-click="reset()">
</div>

<!--result6-->
<div class="question-block" ng-show="q > 10 && score > 38">
<div class="result">Rating SE I ( Primary Focus is on  Spiritual Energy, Enlightenment or Internal Enhancement) Your primary urge is always to seek from within which gives you guidance for where you need to be moment to moment. Secondary focus is towards the outward awareness of the body interacting with the environment. This outward awareness appears to be less central than the internal development, which sometimes leaves you with too little interaction with the world at large or less than satisfactory interaction in general. Peace can be found in the forest as well as the city, if your inner self is truly balanced. Recommendations : You may look for  more positive daily social interactions, in diversified situations and settings which can include light physical activities.</div>
<input type="button" name="startover6" id="startover6" value="Start Over" ng-click="reset()">
</div>



</form><br/>


</div><!--/quiz-->

</section><!--/content-->
    
<div class="clearer backblk">&nbsp;</div>

<footer>
	<div id="copyright">&copy; <?php echo date("Y") ?> Copyright Healthy World Cafe</div>
</footer>

</div><!--/container-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script src="js/controller.js"></script>


        
       
</body>
</html>
