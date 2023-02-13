<?php wp_footer() ?>
</body>
<footer>
        <div class="footer--top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4>Contactez moi</h4>
                        <form method="post" action="send.php">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <button>envoyez</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>