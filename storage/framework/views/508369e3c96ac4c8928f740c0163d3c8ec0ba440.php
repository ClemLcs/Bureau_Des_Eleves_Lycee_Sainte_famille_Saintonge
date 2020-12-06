<?php $__env->startSection('content'); ?>
    <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        
                        <div class="login-form">
                            <form action="/register" method="post">
                            <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <h2>Page d'inscription: </h2>
                                </div>
                                <div class="form-group">
                                    <label>Nom de famille: </label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Nom de famille">
                                </div>
                                <?php if($errors->has('name')): ?>
                                    <p><?php echo e($errors->first('name')); ?></p>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label>Prénom: </label>
                                    <input class="au-input au-input--full" type="text" name="prenom" placeholder="Prénom">
                                </div>
                                <?php if($errors->has('prenom')): ?>
                                    <p><?php echo e($errors->first('prenom')); ?></p>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label>Classe: </label>
                                    <select  class="form-control" name="classe" id="">
                                        <option name="seconde_gt_a">Seconde GT A</option>
                                        <option name="seconde_gt_b">Seconde GT B</option>
                                        <option name="seconde_pro_tisec">Seconde PRO TISEC</option>
                                        <option name="seconde_pro_melec">Seconde PRO MELEC</option>
                                        <option name="seconde_pro_tbee">Seconde PRO TBEE</option>
                                        <option name="seconde_pro_mbc">Seconde PRO MBC</option>
                                        <option name="premiere_s">Première SSI</option>
                                        <option name="premiere_sti_a">Première STI A</option>
                                        <option name="premiere_sti_b">Première STI B</option>
                                        <option name="premiere_sti_c">Première STI C</option>
                                        <option name="premiere_pro_tisec">Premiere PRO TISEC</option>
                                        <option name="premiere_pro_melec">Premiere PRO MELEC</option>
                                        <option name="premiere_pro_tbee">Premiere PRO TBEE</option>
                                        <option name="premiere_pro_mbc">Premiere PRO MBC</option>
                                        <option name="premiere_pro_macon">Premiere PRO Maçon</option>
                                        <option name="premiere_pro_ifca">Premiere PRO IFCA</option>
                                        <option name="terminal_ssi">Terminal SSI</option>
                                        <option name="terminal_sti_a">Terminal STI A</option>
                                        <option name="terminal_sti_b">Terminal STI B</option>
                                        <option name="terminal_sti_c">Terminal STI C</option>
                                        <option name="terminale_pro_tisec">Terminale PRO TISEC</option>
                                        <option name="terminale_pro_melec">Terminale PRO MELEC</option>
                                        <option name="terminale_pro_tbee">Terminale PRO TBEE</option>
                                    </select>
                                </div>
                                <?php if($errors->has('classe')): ?>
                                    <p><?php echo e($errors->first('classe')); ?></p>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label>Adresse email: </label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Adresse emai">
                                </div>
                                <?php if($errors->has('email')): ?>
                                    <p><?php echo e($errors->first('email')); ?></p>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label>Mot de passe: </label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Mot de passe">
                                </div>
                                <div class="form-group">
                                    <label>Confirmer le mot de passe: </label>
                                    <input  type="password" class="au-input au-input--full" name="password_confirmation" placeholder="Confimer le mot de passe" required>
                                </div>
                                
                                <?php if($errors->has('password')): ?>
                                    <p><?php echo e($errors->first('password')); ?></p>
                                <?php endif; ?>
                                                                <div class="form-group">
                                    <input class="au-input au-input--full" type="hidden" name="fonction">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree" required>Accepter les termes et la politique.
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">s'enregister</button>
                                
                            </form>
                            <div class="register-link">
                                <p>
                                    Vous n'avez pas de compte ?
                                    <a href="/register">Crée un compte</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>  

                
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/site/bde/resources/views/auth/register.blade.php ENDPATH**/ ?>