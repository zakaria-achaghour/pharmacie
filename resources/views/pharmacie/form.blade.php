
<div class="row">
    <div class="col md 6">
        <div class="card text-center">
            <div class="card-header">Informations Pharmacien</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nom_pharmacien">Nom:</label>
                            <input type="text" class="form-control" name="nom_pharmacien" id="nom_pharmacien"
                            value="{{ old('nom', $pharmacie->nom ?? null) }}"  autofocus required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="birthday">Prenom :</label>
                            <input type="text" class="form-control" name="prenom" id="prenom"
                            value="{{ old('prenom', $pharmacie->pharmacie ?? null) }}"     required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="cin_pharmacien">Cin  :</label>
                            <input type="text" class="form-control" name="cin_pharmacien" id="cin_pharmacien"
                            value="{{ old('cin_pharmacien', $pharmacie->cin ?? null) }}"  autofocus required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact">Contact :</label>
                            <input type="text" class="form-control" name="contact" id="contact"
                            value="{{ old('contact', $pharmacie->contact ?? null) }}"     required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
    </div>
    <div class="col md 6">
        <div class="card text-center">
            <div class="card-header">Informations Pharmacie</div>
            <div class="card-body">
           
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nom">Nom de Pharmacie :</label>
                            <input type="text" class="form-control" name="nom" id="nom"
                            value="{{ old('nom', $pharmacie->nom ?? null) }}"  autofocus required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="patente">patente :</label>
                            <input type="text" class="form-control" name="patente" id="patente"
                            value="{{ old('patente', $pharmacie->patente ?? null) }}"     required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ice">ICE :</label>
                            <input type="text" class="form-control" name="ice" id="ice"
                            value="{{ old('ice', $pharmacie->ice ?? null) }}"     required>
                        </div>
                    </div>
                </div>
        
        
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="if">IF  :</label>
                            <input type="text" class="form-control" name="if" id="if"
                            value="{{ old('if', $user->if ?? null) }}"  autofocus required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rc">RC :</label>
                            <input type="text" class="form-control" name="rc" id="rc"
                            value="{{ old('rc', $pharmacie->rc ?? null) }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="num_autorisation">N° D'autorisation :</label>
                            <input type="text" class="form-control" name="num_autorisation" id="num_autorisation"
                            value="{{ old('num_autorisation', $pharmacie->num_autorisation ?? null) }}" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
    </div>
</div>

<hr>

<hr>
<div class="row">
    <div class="col-md-6">

        <div class="card text-center">
            <div class="card-header">Adresse de Pharmacie</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ville">Ville:</label>
                           
                            <select class="form-control" name="ville" id="ville"  >
                              <option value="Casa"  >Casa</option>
                              <option value="Rabat"  >Rabat</option>
                              <option value="Agadir 3" >Agadir</option>
                            </select>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="adress">Adress:</label>
                          <textarea class="form-control" name="adress" id="adress" rows="3">
                            {{ old('adress', $pharmacie->adress ?? null) }}
                          </textarea>
                        </div>
                    </div>
                 
                </div>
            </div>
        </div>
        
    </div>
    <div class="col-md-6">
        <div class="card text-center">
            <div class="card-header">Document de Pharmacie</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        
                              <div class="form-group">
                                
                                <input type="file" class="form-control-file" name="fichier" id="fichier">
                              </div>
                             
                           
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12 mb-2">
                       <div class="form-check ">
                         <label class="form-check-label ml-0">
                           <input type="checkbox" class="form-check-input" name="fichier_cin" id="fichier_cin" value="1">
                           CIN Pharmacien
                         </label>

                         <label class="form-check-label ml-5">
                            <input type="checkbox" class="form-check-input" name="fichier_diplome" id="fichier_diplome" value="1">
                            Diplome Pharmacien
                          </label>

                         
                       </div></div>
                       <div class="col-md-12">
                        <div class="form-check ">
                            <label class="form-check-label mr-5">
                                <input type="checkbox" class="form-check-input" name="fichier_autorisation" id="fichier_autorisation" value="1">
                                Autorisation
                              </label>
                          <label class="form-check-label mr-5">
                            <input type="checkbox" class="form-check-input" name="fichier_rc_patent" id="fichier_rc_patent" value="1">
                            RC et PATENTE
                          </label>

                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="fichier_if_ice" id="fichier_if_ice" value="1">
                            IF et ICE
                          </label>
                       </div>
                    </div>
                 
                </div>
            </div>
        </div>
          
    </div>
</div>



