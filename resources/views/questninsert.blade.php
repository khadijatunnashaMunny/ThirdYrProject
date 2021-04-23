<div class="modal-body">
            <form action="{{url('queins')}}" method="post"  >
            <div class="row">
            
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Enter Question</label>
                  @csrf  
                  <input type="text" required="required" name="question" placeholder="Enter Question" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Enter Option 1</label>
                  <input type="text" required="required" name="option1" placeholder="Enter Option 1" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Enter Option 2</label>
                  <input type="text" required="required" name="option2" placeholder="Enter Option 2" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Enter Option 3</label>
                  <input type="text" required="required" name="option3" placeholder="Enter Option 3" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Enter Option 4</label>
                  <input type="text" required="required" name="option4" placeholder="Enter Option 4" class="form-control">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Enter Right Ans</label>
                  <input type="text" required="required" name="ans" placeholder="Enter Right Ans" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label>Select Exam Category</label>
                <select class="form-control" name="category" required="required">
                  <option value="">Select</option>
                  @foreach($catagory as $category)
                    <option value="{{ $category['id'] }}">{{ $category['catagory'] }}</option>
                  @endforeach 
                </select>
              </div>
              
              <div class="col-sm-12">
                <div class="form-group">
                  <button  value="submit" type="submit" class="btn btn-primary">Add</button>
                </div>
              </div>
            </div>
          </form>
          </div>