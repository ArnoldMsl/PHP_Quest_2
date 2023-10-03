
    <form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="user_name" required></input>
    </div>

    <div>
        <label for="courriel">Courriel</label>
        <input type="text" id="courriel" name="user_email" required></input>
    </div>

    <div>
        <label for="message">Message</label>
        <textarea id="message" name="user_message" required></textarea>
    </div>

    <div>
        <label for="numéro">Numéro</label>
        <input type="string" id="numéro" name="user_number" required></input>
    </div>

    <div>
        <label for="sujet">Sujet</label>
        <select name="sujet">
            <option value="niquer des daronnes">Niquer des daronnes</option>
            <option value="niquer des darons">Niquer des darons</option>
        </select>
    </div>
    
    <div class="button">
        <button type="submit">Envoyer votre Message</button>
    </div>

    </form>