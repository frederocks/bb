<form action="buy.php" method="post">
    <fieldset>
        <div align="center">
            <select name="mydropdow">
                <option value="Liquor">Liquor</option>
                <option value="Wine">Wine</option>
                <option value="Beer">Beer</option>
            </select>
        </div>
#        <div class="dropdown">
#        <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">

#        Type <span class="caret"></span>
#        </a>

#        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
#            <li role="presentation"><a role="menuitem" tabiindex="-1" href="#">Liquor</a></li>
#            <li role="presentation"><a role="menuitem" tabiindex="-1" href="#">Wine</a></li>
#            <li role="presentation"><a role="menuitem" tabiindex="-1" href="#">Beer</a></li>
#        </ul>
#        </div>  
        <div class="form-group">
            <input class="form-control" name="name" placeholder="Store Name" type= "text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="location" placeholder="Location" type= "text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="amount" placeholder="Amount" type= "text"/>
        </div>
        <div class="input-group">
            <span class= "input-groupe-addon">$</span>
            <input class="form-control" name="cost" placeholder="Cost" type= "text"/>
        </div>
        <div class="input-group">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
        
    </fieldset>
</form>
