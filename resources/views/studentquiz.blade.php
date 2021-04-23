

        <form action="{{url('que')}}" method="post">

            <div class="form-group">
                <label>Select Exam Category</label>
                <select class="form-control" name="category" required="required">
                  <option value="">Select</option>
                  @foreach($catagory as $category)
                  <option value="{{ $category['id'] }}">{{ $category['catagory'] }}</option>

                  <!-- <a href="{{url('que')}}" >  <label >{{ $category['catagory'] }}</label></a> -->
                @endforeach 
                </select>
            </div>
            <button  value="submit" type="submit" class="btn btn-primary">start</button>

              
        </form>




              
                              <!-- <label>Select Exam Category</label> -->
                <!-- <label class="form-control" name="category" required="required"> -->
                

                <!-- <div> -->
                
                <!-- @foreach($catagory as $category)
                  <a href="{{url('que')}}" value="{{ $category['id'] }} ">  <label >{{ $category['catagory'] }}</label></a>
                @endforeach 
                </div> -->

                <!-- </label> -->



              

