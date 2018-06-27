	<div class="container">
<style type="text/css">
	@media (min-width: 600px)
        {
            #results-body {min-height: 27vh;}
        }
        @media (max-width: 600px)
        {
            #results-body {min-height: 47vh;}
        }
</style>
		<div class="card card-default" style="margin-top: 3%;border-radius: 9px;">
			<div class="card-body" style="padding: 3%;">
				@if($amount || $from_currency || to_currency)
				{{$amount}}{{$from_currency}} to {{$to_currency}}
				@else
				no amount or no currency
				@endif
			</div>
		</div>

		<div class="card card-default" id="results-body" style="margin-top: 3%;border-radius: 9px;">
			<div class="card-body" style="padding: 3%;">
				<span style="color: #777">{{$amount}} {{$from_currency}} equals [value is ({{$val}})]</span>
				<h2>@if($total || $json || $val || $query) 
					{{$total}} {{$to_currency}}  
					
					@else
					no total or currency
					@endif
				</h2>
			</div>

			<div class="container">
			<div class="input-group" style="margin-bottom: 4%;">
				<input type="text" class="form-control" style="text-align: right;" value="35.85" name="">
				<select type="text" class="form-control" name="">
					<option>United </option>
				</select>
				
			</div>

			<div class="input-group" style="margin-bottom: 5%;">
				<input type="text" class="form-control" style="text-align: right;" value="169.93" name="">
				<select type="text" class="form-control" name="">
					<option>United </option>
				</select>
				
			</div>
			</div>

			<div class="card-footer">
				<span style="cursor: pointer;" onclick='
                        if (this.parentNode.parentNode.children[1].style.display === "none") {
                            this.parentNode.parentNode.children[1].style.display = "block";
                            $("#results-body").css("min-height", "67vh");
                            $(".show").text("Show less");
                        } else {
                            this.parentNode.parentNode.children[1].style.display = "none";
                            $("#results-body").css("min-height", "40vh");
                            $(".show").text("Show more");
                        }
                        $("#chevron").toggleClass("fa-chevron-down fa-chevron-up");
                        
                        '><i class="fa fa-chevron-up" id="chevron"></i> <span class="show">Show less</span></span>
				<a href="index.html"><span><i class="fa fa-arrow-left float-right"></i></span></a>
			</div>
		</div>

	</div>
	