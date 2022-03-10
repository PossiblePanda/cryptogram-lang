<!DOCTYPE html>
<html style="height:100%;">

<body>
<style>
@import url('https://fonts.googleapis.com/css?family=Lato:300italic,700italic,300,700');

body {
 font-family:'Lato';
 height:100%;
 overflow-y: hidden;
}
</style>
 <div id="left" style="display:flex;flex-wrap:wrap;float:left;width:45%;height:100%;">
  <label for="input" style="width:100%;text-align:center;">Input</label><br>
  <textarea id="input" oninput="translateTo()" style="width:100%;height:45%;resize:none;"></textarea><br>
  <label for="output" style="width:100%;text-align:center;">Output</label><br>
  <textarea id="output" oninput="translateFrom()" style="width:100%;height:45%;resize:none;"></textarea>
 </div>
 <div id="right" style="display:flex;flex-wrap:wrap;float:right;width:45%;height:100%;">
  <p>Welcome to the Cryptogram Translator. This has been made by TJ for PossiblePanda's Cryptogram language. To start, type anything into the Input box and its equivalent in Cryptogram will appear in the Output box. If you put any text in the Cryptogram language into the Output box it will translate and be put in the Input box.<br><br>
This uses the most similar characters to Cryptogram from Unicode, please note that this is a work in progress and will be changed. <br><br>
Please note that this translator does not use the some rules, such as the Double Character rule. <br><br>
If you want to contact PossiblePanda please DM Possible Panda#2609 on discord, or check out the official github <a href="https://github.com/PossiblePanda/cryptogram-lang">here.</a></p>
 </div>
<script>
chars = "abcdefghijklmnopqrstuvwxyz".split("")
crars = "ՈӦздT]yÜΡ⊙ℹ◔6⊥(O┘┌✝ƉṾNʏ□Χʔ".split("")

inp = document.getElementById('input')
oup = document.getElementById('output')

console.log(inp)

function translateTo() {
 text = inp.value
 letters = text.toLowerCase().split("")
 final = ""
 for (let i = 0; i < letters.length; i++) {
  letter = letters[i]
  if (chars.includes(letter) == false) {
   final = final + letter
  } else {
   final = final + crars[chars.indexOf(letter)]
  }
 }
 oup.value = final
}
function translateFrom() {
 text = oup.value
 letters = text.split("")
 final = ""
 for (let i = 0; i < letters.length; i++) {
  letter = letters[i]
  if (crars.includes(letter) == false) {
   final = final + letter
  } else {
   final = final + chars[crars.indexOf(letter)]
  }
 }
 inp.value = final
}
</script>
</body>

</html>