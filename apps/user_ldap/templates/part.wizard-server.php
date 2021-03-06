<fieldset id="ldapWizard1">
		<p>
		<select id="ldap_serverconfig_chooser" name="ldap_serverconfig_chooser">
		<?php if(count($_['serverConfigurationPrefixes']) === 0 ) {
			?>
				<option value="" selected>1. Server</option>');
			<?php
		} else {
			$i = 1;
			$sel = ' selected';
			foreach($_['serverConfigurationPrefixes'] as $prefix) {
				?>
				<option value="<?php p($prefix); ?>"<?php p($sel); $sel = ''; ?>><?php p($i++); ?>. Server: <?php p($_['serverConfigurationHosts'][$prefix]); ?></option>
				<?php
			}
		}
		?>
		<option value="NEW"><?php p($l->t('Add Server Configuration'));?></option>
		</select>
		<button id="ldap_action_delete_configuration"
			name="ldap_action_delete_configuration">Delete Configuration</button>
		</p>

		<div class="hostPortCombinator">
			<div class="tablerow">
				<div class="tablecell">
					<div class="table">
						<input type="text" class="host tablecell lwautosave" id="ldap_host"
							name="ldap_host"
							placeholder="<?php p($l->t('Host'));?>"
							title="<?php p($l->t('You can omit the protocol, except you require SSL. Then start with ldaps://'));?>"
							/>
						<span>
							<input type="number" id="ldap_port" name="ldap_port"
								class="invisible lwautosave"
								placeholder="<?php p($l->t('Port'));?>" />
						</span>
					</div>
				</div>
			</div>
			<div class="tablerow">
				<input type="text" id="ldap_dn" name="ldap_dn"
				class="tablecell lwautosave"
				placeholder="<?php p($l->t('User DN'));?>"
				title="<?php p($l->t('The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty.'));?>"
				/>
			</div>

			<div class="tablerow">
				<input type="password" id="ldap_agent_password"
				class="tablecell lwautosave" name="ldap_agent_password"
				placeholder="<?php p($l->t('Password'));?>"
				title="<?php p($l->t('For anonymous access, leave DN and Password empty.'));?>"
				/>
			</div>

			<div class="tablerow">
				<textarea id="ldap_base" name="ldap_base"
					class="tablecell invisible lwautosave"
					placeholder="<?php p($l->t('One Base DN per line'));?>"
					title="<?php p($l->t('You can specify Base DN for users and groups in the Advanced tab'));?>">
				</textarea>
			</div>

			<div class="tablerow">
				<div class="tablecell ldapWizardInfo invisible">&nbsp;
				</div>
			</div>
		</div>
		<?php print_unescaped($_['wizardControls']); ?>
	</fieldset>