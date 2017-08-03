<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<title>Black color</title>

	<!-- Your META here -->
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0" name="viewport">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="js/demo.css">
	<link rel="stylesheet" href="js/font-awesome.css">
	<link rel="stylesheet" href="js/j-forms.css">
	<link rel="stylesheet" href="js/j-forms-black.css">

</head>
<body class="bg-pic">
<div class="wrapper wrapper-640">
  <form action="" method="" class="j-forms black" novalidate="">
    <div class="header">
      <p>Black color</p>
    </div>
    <!-- end /.header-->
    <div class="content">
      <div class="divider-text gap-top-20 gap-bottom-45"> <span>Input</span> </div>
      <!-- start text -->
      <div class="unit">
        <label class="label">Text</label>
        <div class="input">
          <label class="icon-left" for="text"> <i class="fa fa-edit"></i> </label>
          <input name="text" type="text" id="text" placeholder="some text">
        </div>
      </div>
      <!-- end text -->
      <!-- start textarea -->
      <div class="unit">
        <label class="label">Textarea</label>
        <div class="input">
          <textarea name="textarea" spellcheck="false"></textarea>
        </div>
      </div>
      <!-- end textarea -->
      <div class="divider-text gap-top-45 gap-bottom-45"> <span>Select</span> </div>
      <!-- start single select -->
      <div class="unit">
        <label class="input select">
        <select name="select" autocomplete="off">
          <option selected="selected" value="none">Select fruit</option>
          <option value="0">Apple</option>
          <option value="1">Banana</option>
          <option value="2">Coconut</option>
          <option value="3">Mango</option>
          <option value="4">Melon</option>
          <option value="5">Orange</option>
          <option value="6">Pear</option>
          <option value="7">Watermelon</option>
        </select>
        <i></i> </label>
      </div>
      <!-- end single select -->
      <!-- start multiple select -->
      <div class="unit">
        <label class="input multiple-select">
        <select name="select" multiple="multiple" autocomplete="off">
          <option value="0" selected="selected">Apple</option>
          <option value="1">Banana</option>
          <option value="2">Coconut</option>
          <option value="3">Mango</option>
          <option value="4">Melon</option>
          <option value="5">Orange</option>
          <option value="6">Pear</option>
          <option value="7">Watermelon</option>
        </select>
        </label>
      </div>
      <!-- end multiple select -->
      <div class="divider-text gap-top-45 gap-bottom-45"> <span>File button</span> </div>
      <!-- start append big file button -->
      <div class="unit">
        <label class="input append-big-btn"> </label>
        <label class="icon-left" for="append-big-btn"> <i class="fa fa-download"></i> </label>
        <div class="file-button"> Browse
          <input name="file" type="file" onChange="document.getElementById('append-big-btn').value = this.value;">
        </div>
        <input name="text2" type="text" id="append-big-btn" readonly="readonly" placeholder="no file selected">
      </div>
      <!-- end append big file button -->
      <div class="divider-text gap-top-45 gap-bottom-45"> <span>Widget addon</span> </div>
      <!-- start widget addons -->
      <div class="j-row">
        <div class="span6 unit">
          <div class="widget left-50">
            <div class="input">
              <input name="text2" type="text" id="@" placeholder="email">
            </div>
            <label class="addon adn-50 adn-left" for="@"> <i class="fa fa-at"></i> </label>
          </div>
        </div>
        <div class="span6 unit">
          <div class="widget left-50 right-50">
            <div class="input">
              <input name="text2" type="text" id="$" placeholder="price">
            </div>
            <label class="addon adn-50 adn-left" for="$"> <i class="fa fa-usd"></i> </label>
            <label class="addon adn-50 adn-right" for="$"> .00 </label>
          </div>
        </div>
      </div>
      <!-- end widget addons -->
      <div class="divider-text gap-top-20 gap-bottom-45"> <span>Widget button</span> </div>
      <!-- start widget buttons 50 -->
      <div class="j-row">
        <div class="span6 unit">
          <div class="widget right-50">
            <div class="input">
              <input name="search" type="search" placeholder="i'm looking for...">
            </div>
            <button type="submit" class="addon-btn adn-50 adn-right"> <i class="fa fa-search"></i> </button>
          </div>
        </div>
        <div class="span6 unit">
          <div class="widget right-50">
            <div class="input">
              <input name="text2" type="text">
            </div>
            <button type="submit" class="addon-btn adn-50 adn-right"> Go! </button>
          </div>
        </div>
      </div>
      <!-- end widget buttons 50 -->
      <div class="divider-text gap-top-20 gap-bottom-45"> <span>Tooltip</span> </div>
      <!-- start top tooltips -->
      <div class="j-row">
        <div class="span6 unit">
          <div class="input">
            <label class="icon-left" for="left-top"> <i class="fa fa-user"></i> </label>
            <input name="text2" type="text" id="left-top" placeholder="top-left tooltip">
            <span class="tooltip tooltip-left-top">Tooltip or useful information</span> </div>
        </div>
        <div class="span6 unit">
          <div class="input">
            <label class="icon-right" for="right-top"> <i class="fa fa-phone"></i> </label>
            <input name="text2" type="text" id="right-top" placeholder="top-right tooltip">
            <span class="tooltip tooltip-right-top">Tooltip or useful information</span> </div>
        </div>
      </div>
      <!-- end top tooltips -->
      <!-- start image tooltip -->
      <div class="unit">
        <div class="input">
          <input name="text2" type="text" placeholder="image tooltip">
          <span class="tooltip-image tooltip-right-top"><img src="Black%20color_files/name.jpg"></span> </div>
      </div>
      <!-- end image tooltip -->
      <div class="divider-text gap-top-45 gap-bottom-45"> <span>Link</span> </div>
      <!-- start link -->
      <div class="unit">
        <label class="checkbox">
        <input name="checkbox" type="checkbox">
        <i></i> I have read and agree with <a href="#" class="link">Terms of service</a> </label>
      </div>
      <!-- end link -->
      <div class="divider-text gap-top-45 gap-bottom-45"> <span>Checkbox and Radio</span> </div>
      <!-- start columned checkbox and radio -->
      <div class="unit">
        <div class="j-row">
          <div class="span3">
            <label class="checkbox">
            <input name="checkbox" type="checkbox">
            <i></i> Apple </label>
            <label class="checkbox">
            <input name="checkbox" type="checkbox">
            <i></i> Banana </label>
          </div>
          <div class="span3">
            <label class="checkbox">
            <input name="checkbox" type="checkbox">
            <i></i> Mango </label>
            <label class="checkbox">
            <input name="checkbox" type="checkbox">
            <i></i> Melon </label>
          </div>
          <div class="span3">
            <label class="radio">
            <input name="radio" checked="checked" type="radio">
            <i></i> Apricot </label>
            <label class="radio">
            <input name="radio" type="radio">
            <i></i> Grapes </label>
          </div>
          <div class="span3">
            <label class="radio">
            <input name="radio" type="radio">
            <i></i> Orange </label>
            <label class="radio">
            <input name="radio" type="radio">
            <i></i> Pear </label>
          </div>
        </div>
      </div>
      <!-- end j-row -->
      <!-- end columned checkbox and radio -->
      <div class="divider-text gap-top-45 gap-bottom-45"> <span>Switch</span> </div>
      <!-- start columned toggle -->
      <div class="unit">
        <div class="j-row">
          <div class="span4">
            <label class="checkbox-toggle">
            <input name="checkbox" type="checkbox">
            <i></i> Apple </label>
            <label class="checkbox-toggle">
            <input name="checkbox" type="checkbox">
            <i></i> Banana </label>
          </div>
          <div class="span4">
            <label class="checkbox-toggle">
            <input name="checkbox" type="checkbox">
            <i></i> Mango </label>
            <label class="checkbox-toggle">
            <input name="checkbox" type="checkbox">
            <i></i> Melon </label>
          </div>
          <div class="span4">
            <label class="radio-toggle">
            <input name="radio-toggle" checked="checked" type="radio">
            <i></i> Orange </label>
            <label class="radio-toggle">
            <input name="radio-toggle" type="radio">
            <i></i> Pear </label>
          </div>
        </div>
      </div>
      <!-- end j-row -->
      <!-- end columned toggle -->
      <div class="divider-text gap-top-45 gap-bottom-45"> <span>Rating</span> </div>
      <!-- start ratings -->
      <div class="unit">
        <div class="j-row">
          <div class="span5">
            <div class="rating-group">
              <label class="label">Quality</label>
              <div class="ratings">
                <input id="5q" name="quality-rating" type="radio">
                <label for="5q"> <i class="fa fa-star"></i> </label>
                <input id="4q" name="quality-rating" type="radio">
                <label for="4q"> <i class="fa fa-star"></i> </label>
                <input id="3q" name="quality-rating" type="radio">
                <label for="3q"> <i class="fa fa-star"></i> </label>
                <input id="2q" name="quality-rating" type="radio">
                <label for="2q"> <i class="fa fa-star"></i> </label>
                <input id="1q" name="quality-rating" type="radio">
                <label for="1q"> <i class="fa fa-star"></i> </label>
              </div>
            </div>
            <div class="rating-group">
              <label class="label">Flexibility</label>
              <div class="ratings">
                <input id="5f" name="flex-rating" type="radio">
                <label for="5f"> <i class="fa fa-star"></i> </label>
                <input id="4f" name="flex-rating" type="radio">
                <label for="4f"> <i class="fa fa-star"></i> </label>
                <input id="3f" name="flex-rating" type="radio">
                <label for="3f"> <i class="fa fa-star"></i> </label>
                <input id="2f" name="flex-rating" type="radio">
                <label for="2f"> <i class="fa fa-star"></i> </label>
                <input id="1f" name="flex-rating" type="radio">
                <label for="1f"> <i class="fa fa-star"></i> </label>
              </div>
            </div>
          </div>
          <div class="offset2 span5">
            <div class="rating-group">
              <label class="label">Support</label>
              <div class="ratings">
                <input id="5supp" name="supp-rating" type="radio">
                <label for="5supp"> <i class="fa fa-thumbs-o-up"></i> </label>
                <input id="4supp" name="supp-rating" type="radio">
                <label for="4supp"> <i class="fa fa-thumbs-o-up"></i> </label>
                <input id="3supp" name="supp-rating" type="radio">
                <label for="3supp"> <i class="fa fa-thumbs-o-up"></i> </label>
                <input id="2supp" name="supp-rating" type="radio">
                <label for="2supp"> <i class="fa fa-thumbs-o-up"></i> </label>
                <input id="1supp" name="supp-rating" type="radio">
                <label for="1supp"> <i class="fa fa-thumbs-o-up"></i> </label>
              </div>
            </div>
            <div class="rating-group">
              <label class="label">Delivery</label>
              <div class="ratings">
                <input id="5d" name="delivery-rating" type="radio">
                <label for="5d"> <i class="fa fa-thumbs-o-up"></i> </label>
                <input id="4d" name="delivery-rating" type="radio">
                <label for="4d"> <i class="fa fa-thumbs-o-up"></i> </label>
                <input id="3d" name="delivery-rating" type="radio">
                <label for="3d"> <i class="fa fa-thumbs-o-up"></i> </label>
                <input id="2d" name="delivery-rating" type="radio">
                <label for="2d"> <i class="fa fa-thumbs-o-up"></i> </label>
                <input id="1d" name="delivery-rating" type="radio">
                <label for="1d"> <i class="fa fa-thumbs-o-up"></i> </label>
              </div>
            </div>
          </div>
        </div>
        <!-- end j-row -->
      </div>
      <!-- end ratings -->
    </div>
    <!-- end /.content -->
    <div class="footer">
      <button type="submit" class="primary-btn processing">Processing...</button>
      <button type="reset" class="secondary-btn">Reset</button>
      <button type="submit" class="primary-btn">Submit</button>
    </div>
    <!-- end /.footer -->
  </form>
</div>
	
	<!-- Scripts -->
	<script src="Black%20color_files/jquery.js"></script>

	<!--[if lt IE 10]>
			<script src="j-folder/js/jquery.placeholder.min.js"></script>
		<![endif]-->


</body></html>