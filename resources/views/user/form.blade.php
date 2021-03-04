

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nom">Nom  :</label>
                                    <input type="text" class="form-control" name="nom" id="nom"
                                    value="{{ old('nom', $user->nom ?? null) }}"  autofocus required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="birthday">Prenom :</label>
                                    <input type="text" class="form-control" name="prenom" id="prenom"
                                    value="{{ old('prenom', $user->prenom ?? null) }}"     required>
                                </div>
                            </div>
                        </div>
         
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Email :</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                    value="{{ old('email', $user->email ?? null) }}" 
                                    placeholder="example@example.com" autocomplete="false" required>
                         
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="role">role</label>
                          <select class="form-control" name="role" id="role"  >
                            <option value="role 1"  >role 1</option>
                            <option value="role 2"  >role 2</option>
                            <option value="role 3" >role 3</option>
                          </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <div class="form-check  ">
                                        <label class="form-check-label custom-checkbox">
                                            <input class="form-check-input" type="radio" name="genre" id="genre" value="homme" 
                                           > Homme
                                        </label>
                                    </div>
                                    <div class="form-check ">
                                        <label class="form-check-label custom-checkbox">
                                            <input class="form-check-input" type="radio" name="genre" id="genre" value="femme"
                                            > Femme
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                      

                       