<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="text" placeholder="Enter Email" name="email">
        <br>
        <br>
        <input type="text" placeholder="Enter password" name="password">
        <br>
        <br>
        <button type="submit">submit</button>
    </form>
</div>