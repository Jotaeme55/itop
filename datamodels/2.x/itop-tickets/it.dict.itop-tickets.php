<?php
// Copyright (C) 2010-2012 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>
/**
 * @copyright   Copyright (C) 2010-2012 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:Ticket' => 'Ticket',
	'Class:Ticket+' => '',
	'Class:Ticket/Attribute:ref' => 'Ref',
	'Class:Ticket/Attribute:ref+' => '',
	'Class:Ticket/Attribute:org_id' => 'Cliente',
	'Class:Ticket/Attribute:org_id+' => '',
	'Class:Ticket/Attribute:org_name' => 'Organizzazione',
	'Class:Ticket/Attribute:org_name+' => '',
	'Class:Ticket/Attribute:caller_id' => 'Caller~~',
	'Class:Ticket/Attribute:caller_id+' => '~~',
	'Class:Ticket/Attribute:caller_name' => 'Caller Name~~',
	'Class:Ticket/Attribute:caller_name+' => '~~',
	'Class:Ticket/Attribute:team_id' => 'Team~~',
	'Class:Ticket/Attribute:team_id+' => '~~',
	'Class:Ticket/Attribute:team_name' => 'Team Name~~',
	'Class:Ticket/Attribute:team_name+' => '~~',
	'Class:Ticket/Attribute:agent_id' => 'Agente',
	'Class:Ticket/Attribute:agent_id+' => '',
	'Class:Ticket/Attribute:agent_name' => 'Nome dell\'Agente',
	'Class:Ticket/Attribute:agent_name+' => '',
	'Class:Ticket/Attribute:title' => 'Titolo',
	'Class:Ticket/Attribute:title+' => '',
	'Class:Ticket/Attribute:description' => 'Descrizione',
	'Class:Ticket/Attribute:description+' => '',
	'Class:Ticket/Attribute:start_date' => 'Data di inizio',
	'Class:Ticket/Attribute:start_date+' => '',
	'Class:Ticket/Attribute:end_date' => 'Data di fine',
	'Class:Ticket/Attribute:end_date+' => '',
	'Class:Ticket/Attribute:last_update' => 'Ultimo aggiornamento',
	'Class:Ticket/Attribute:last_update+' => '',
	'Class:Ticket/Attribute:close_date' => 'Data di Chiusura',
	'Class:Ticket/Attribute:close_date+' => '',
	'Class:Ticket/Attribute:private_log' => 'Private log~~',
	'Class:Ticket/Attribute:private_log+' => '~~',
	'Class:Ticket/Attribute:contacts_list' => 'Contacts~~',
	'Class:Ticket/Attribute:contacts_list+' => 'All the contacts linked to this ticket~~',
	'Class:Ticket/Attribute:functionalcis_list' => 'CIs~~',
	'Class:Ticket/Attribute:functionalcis_list+' => 'All the configuration items impacted for this ticket~~',
	'Class:Ticket/Attribute:workorders_list' => 'Work orders~~',
	'Class:Ticket/Attribute:workorders_list+' => 'All the work orders for this ticket~~',
	'Class:Ticket/Attribute:finalclass' => 'Tipo',
	'Class:Ticket/Attribute:finalclass+' => '',
	'Class:Ticket/Attribute:operational_status' => 'Operational status~~',
	'Class:Ticket/Attribute:operational_status+' => 'Computed after the detailed status~~',
	'Class:Ticket/Attribute:operational_status/Value:ongoing' => 'Ongoing~~',
	'Class:Ticket/Attribute:operational_status/Value:ongoing+' => 'Work in progress~~',
	'Class:Ticket/Attribute:operational_status/Value:resolved' => 'Resolved~~',
	'Class:Ticket/Attribute:operational_status/Value:resolved+' => '~~',
	'Class:Ticket/Attribute:operational_status/Value:closed' => 'Closed~~',
	'Class:Ticket/Attribute:operational_status/Value:closed+' => '~~',
	'Ticket:ImpactAnalysis' => 'Impact Analysis~~',
));


//
// Class: lnkContactToTicket
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkContactToTicket' => 'Link Contact / Ticket~~',
	'Class:lnkContactToTicket+' => '~~',
	'Class:lnkContactToTicket/Attribute:ticket_id' => 'Ticket~~',
	'Class:lnkContactToTicket/Attribute:ticket_id+' => '~~',
	'Class:lnkContactToTicket/Attribute:ticket_ref' => 'Ref~~',
	'Class:lnkContactToTicket/Attribute:ticket_ref+' => '~~',
	'Class:lnkContactToTicket/Attribute:contact_id' => 'Contact~~',
	'Class:lnkContactToTicket/Attribute:contact_id+' => '~~',
	'Class:lnkContactToTicket/Attribute:contact_email' => 'Contact Email~~',
	'Class:lnkContactToTicket/Attribute:contact_email+' => '~~',
	'Class:lnkContactToTicket/Attribute:role' => 'Role (text)~~',
	'Class:lnkContactToTicket/Attribute:role+' => '~~',
	'Class:lnkContactToTicket/Attribute:role_code' => 'Role~~',
	'Class:lnkContactToTicket/Attribute:role_code/Value:manual' => 'Added manually~~',
	'Class:lnkContactToTicket/Attribute:role_code/Value:computed' => 'Computed~~',
	'Class:lnkContactToTicket/Attribute:role_code/Value:do_not_notify' => 'Do not notify~~',
));

//
// Class: lnkFunctionalCIToTicket
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:lnkFunctionalCIToTicket' => 'Link FunctionalCI / Ticket~~',
	'Class:lnkFunctionalCIToTicket+' => '~~',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_id' => 'Ticket~~',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_id+' => '~~',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_ref' => 'Ref~~',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_ref+' => '~~',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_title' => 'Ticket title~~',
	'Class:lnkFunctionalCIToTicket/Attribute:ticket_title+' => '~~',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_id' => 'CI~~',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_id+' => '~~',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_name' => 'CI Name~~',
	'Class:lnkFunctionalCIToTicket/Attribute:functionalci_name+' => '~~',
	'Class:lnkFunctionalCIToTicket/Attribute:impact' => 'Impact (text)~~',
	'Class:lnkFunctionalCIToTicket/Attribute:impact+' => '~~',
	'Class:lnkFunctionalCIToTicket/Attribute:impact_code' => 'Impact~~',
	'Class:lnkFunctionalCIToTicket/Attribute:impact_code/Value:manual' => 'Added manually~~',
	'Class:lnkFunctionalCIToTicket/Attribute:impact_code/Value:computed' => 'Computed~~',
	'Class:lnkFunctionalCIToTicket/Attribute:impact_code/Value:not_impacted' => 'Not impacted~~',
));


//
// Class: WorkOrder
//

Dict::Add('IT IT', 'Italian', 'Italiano', array(
	'Class:WorkOrder' => 'Work Order~~',
	'Class:WorkOrder+' => '~~',
	'Class:WorkOrder/Attribute:name' => 'Name~~',
	'Class:WorkOrder/Attribute:name+' => '~~',
	'Class:WorkOrder/Attribute:status' => 'Status~~',
	'Class:WorkOrder/Attribute:status+' => '~~',
	'Class:WorkOrder/Attribute:status/Value:open' => 'open~~',
	'Class:WorkOrder/Attribute:status/Value:open+' => '~~',
	'Class:WorkOrder/Attribute:status/Value:closed' => 'closed~~',
	'Class:WorkOrder/Attribute:status/Value:closed+' => '~~',
	'Class:WorkOrder/Attribute:description' => 'Description~~',
	'Class:WorkOrder/Attribute:description+' => '~~',
	'Class:WorkOrder/Attribute:ticket_id' => 'Ticket~~',
	'Class:WorkOrder/Attribute:ticket_id+' => '~~',
	'Class:WorkOrder/Attribute:ticket_ref' => 'Ticket ref~~',
	'Class:WorkOrder/Attribute:ticket_ref+' => '~~',
	'Class:WorkOrder/Attribute:team_id' => 'Team~~',
	'Class:WorkOrder/Attribute:team_id+' => '~~',
	'Class:WorkOrder/Attribute:team_name' => 'Team Name~~',
	'Class:WorkOrder/Attribute:team_name+' => '~~',
	'Class:WorkOrder/Attribute:agent_id' => 'Agent~~',
	'Class:WorkOrder/Attribute:agent_id+' => '~~',
	'Class:WorkOrder/Attribute:agent_email' => 'Agent email~~',
	'Class:WorkOrder/Attribute:agent_email+' => '~~',
	'Class:WorkOrder/Attribute:start_date' => 'Start date~~',
	'Class:WorkOrder/Attribute:start_date+' => '~~',
	'Class:WorkOrder/Attribute:end_date' => 'End date~~',
	'Class:WorkOrder/Attribute:end_date+' => '~~',
	'Class:WorkOrder/Attribute:log' => 'Log~~',
	'Class:WorkOrder/Attribute:log+' => '~~',
	'Class:WorkOrder/Stimulus:ev_close' => 'Close~~',
	'Class:WorkOrder/Stimulus:ev_close+' => '~~',
));


// Fieldset translation
Dict::Add('IT IT', 'Italian', 'Italiano', array(

	'Ticket:baseinfo' => 'Infomazioni Generali',
	'Ticket:date' => 'Date',
	'Ticket:contact' => 'Contatti',
	'Ticket:moreinfo' => 'Pi?? informazioni',
	'Ticket:relation' => 'Relazioni',
	'Ticket:log' => 'Communicazioni',
	'Ticket:Type' => 'Qualification~~',
	'Ticket:support' => 'Support~~',
	'Ticket:resolution' => 'Resolution~~',
	'Ticket:SLA' => 'SLA report~~',
	'WorkOrder:Details' => 'Details~~',
	'WorkOrder:Moreinfo' => 'More information~~',
	'Tickets:ResolvedFrom' => 'Automatically resolved from %1$s~~',

	'Class:cmdbAbstractObject/Method:Set' => 'Set~~',
	'Class:cmdbAbstractObject/Method:Set+' => 'Set a field with a static value~~',
	'Class:cmdbAbstractObject/Method:Set/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:Set/Param:1+' => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:Set/Param:2' => 'Value~~',
	'Class:cmdbAbstractObject/Method:Set/Param:2+' => 'The value to set~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDate' => 'SetCurrentDate~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDate+' => 'Set a field with the current date and time~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDate/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetCurrentDate/Param:1+' => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:SetCurrentUser' => 'SetCurrentUser~~',
	'Class:cmdbAbstractObject/Method:SetCurrentUser+' => 'Set a field with the currently logged in user~~',
	'Class:cmdbAbstractObject/Method:SetCurrentUser/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetCurrentUser/Param:1+' => 'The field to set, in the current object. If the field is a string then the friendly name will be used, otherwise the identifier will be used. That friendly name is the name of the person if any is attached to the user, otherwise it is the login.~~',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson' => 'SetCurrentPerson~~',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson+' => 'Set a field with the currently logged in person (the \\"person\\" attached to the logged in \\"user\\").~~',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetCurrentPerson/Param:1+' => 'The field to set, in the current object. If the field is a string then the friendly name will be used, otherwise the identifier will be used.~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime' => 'SetElapsedTime~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime+' => 'Set a field with the time (seconds) elapsed since a date given by another field~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:1+' => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:2' => 'Reference Field~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:2+' => 'The field from which to get the reference date~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:3' => 'Working Hours~~',
	'Class:cmdbAbstractObject/Method:SetElapsedTime/Param:3+' => 'Leave empty to rely on the standard working hours scheme, or set to \\"DefaultWorkingTimeComputer\\" to force a 24x7 scheme~~',
	'Class:cmdbAbstractObject/Method:Reset' => 'Reset~~',
	'Class:cmdbAbstractObject/Method:Reset+' => 'Reset a field to its default value~~',
	'Class:cmdbAbstractObject/Method:Reset/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:Reset/Param:1+' => 'The field to reset, in the current object~~',
	'Class:cmdbAbstractObject/Method:Copy' => 'Copy~~',
	'Class:cmdbAbstractObject/Method:Copy+' => 'Copy the value of a field to another field~~',
	'Class:cmdbAbstractObject/Method:Copy/Param:1' => 'Target Field~~',
	'Class:cmdbAbstractObject/Method:Copy/Param:1+' => 'The field to set, in the current object~~',
	'Class:cmdbAbstractObject/Method:Copy/Param:2' => 'Source Field~~',
	'Class:cmdbAbstractObject/Method:Copy/Param:2+' => 'The field to get the value from, in the current object~~',
	'Class:cmdbAbstractObject/Method:ApplyStimulus' => 'ApplyStimulus~~',
	'Class:cmdbAbstractObject/Method:ApplyStimulus+' => 'Apply the specified stimulus to the current object~~',
	'Class:cmdbAbstractObject/Method:ApplyStimulus/Param:1' => 'Stimulus code~~',
	'Class:cmdbAbstractObject/Method:ApplyStimulus/Param:1+' => 'A valid stimulus code for the current class~~',
	'Class:ResponseTicketTTO/Interface:iMetricComputer' => 'Time To Own~~',
	'Class:ResponseTicketTTO/Interface:iMetricComputer+' => 'Goal based on a SLT of type TTO~~',
	'Class:ResponseTicketTTR/Interface:iMetricComputer' => 'Time To Resolve~~',
	'Class:ResponseTicketTTR/Interface:iMetricComputer+' => 'Goal based on a SLT of type TTR~~',

	'portal:itop-portal' => 'Standard portal~~', // This is the portal name that will be displayed in portal dispatcher (eg. URL in menus)
	'Page:DefaultTitle' => '%1$s - User portal~~',
	'Brick:Portal:UserProfile:Title' => 'Il Mio Profilo',
	'Brick:Portal:NewRequest:Title' => 'Nuova Richiesta',
	'Brick:Portal:NewRequest:Title+' => '<p>Hai bisogno di aiuto?</p><p>Cerca nel catalogo dei servizi e inviaci una richiesta al nostro supporto.</p>',
	'Brick:Portal:OngoingRequests:Title' => 'Richieste in corso',
	'Brick:Portal:OngoingRequests:Title+' => '<p>Segui le tue richieste in corso.</p><p>Verifica i progressi, aggiungi dei commenti, allega i documenti, scopri la soluzione.</p>',
	'Brick:Portal:OngoingRequests:Tab:OnGoing' => 'Aperte',
	'Brick:Portal:OngoingRequests:Tab:Resolved' => 'Risolte',
	'Brick:Portal:ClosedRequests:Title' => 'Richieste Chiuse',
));
