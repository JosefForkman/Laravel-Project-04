<section class="register-section">
    <h2 class="register-header">Dont have an account?</h2>

    <form method="POST" action="/register"  class="register-form">
        @csrf
        <h3>Register a new one!</h3>
        <label for="name">user-name</label>
        <input type="text" name="name" placeholder="ex: Martin">

        <Label for="email">Email</Label>
        <input type="email" name="email" required>

        <label for="password">password</label>
        <input type="password" name="password" required>

        <button type="submit">Create</button>
    </form>

</section>
