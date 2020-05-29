@csrf

<div>

    <label for="name">Name</label>

    <input type="text" id="name" name="name" value="{{ $student->name }}"/>

</div>

<div>

    <label for="phonenumber">PhoneNumber</label>

    <input type="text" id="phonenumber" name="phonenumber" value="{{ $student->phonenumber }}"/>

</div>

<div>

    <label for="address">Address</label>

    <input type="text" id="address" name="address" value="{{ $student->address }}"/>

</div>

<div>

    <label for="address">Course</label></label>

    <input type="text" id="course" name="course" value="{{ $student->course->name }}"/>

</div>