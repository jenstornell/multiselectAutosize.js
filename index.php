<!doctype html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title>multiselectAutosize.js</title>

  <style>
  select {
    font-size: 1rem;
    padding: .5rem;
    border: 1px solid #ccc;
  }
  section {
    display: flex;
    background: #eee;
    padding: 4rem;
  }
  div {
    display: flex;
    flex-direction: column;
    margin-right: 1rem;
  }
  label {
    font-weight: bold;
    font-family: arial;
    display: block;
    margin-bottom: .5rem;
  }
  </style>
</head>
<body>

<section>
<div>
<label>Before</label>
<select multiple>
  <option>Option1</option>
  <option>Option2</option>
  <option>Option3</option>
  <option>Option4</option>
  <option>Option5</option>
  <option>Option6</option>
  <option>Option7</option>
  <option>Option8</option>
  <option>Option9</option>
</select>
</div>

<div>
<label>After</label>
<select multiple size="20" id="two">
  <option>Option1</option>
  <option>Option2</option>
  <option>Option3</option>
  <option>Option4</option>
  <option>Option5</option>
  <option>Option6</option>
  <option>Option7</option>
  <option>Option8</option>
  <option>Option9</option>
</select>
</div>
</section>

<script src="assets/js/multiselectAutosize.min.js?t=<?= time(); ?>"></script>
<script>
multiselectAutosize.init({
  selector: '#two'
});

let els = document.querySelectorAll('select#two');
//multiselectAutosize.destroy(els);
</script>

<style>
select[multiple]#two::-webkit-scrollbar { 
  display: none; 
}
</style>

</body>
</html>