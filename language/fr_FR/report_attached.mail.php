subject: Rapport sur le {if:target.type=="Transfer"}dépôt{endif}{if:target.type=="File"}fichier{endif}{if:target.type=="Recipient"}destinataire{endif} n°{target.id}

{alternative:plain}

Madame, Monsieur,

Veuillez trouver en pièce-jointe le rapport sur le {if:target.type=="Transfer"}dépôt{endif}{if:target.type=="File"}fichier{endif}{if:target.type=="Recipient"}destinataire{endif} n°{target.id}.

Cordialement,
{cfg:site_name}

{alternative:html}

<p>
    Madame, Monsieur,
</p>

<p>
    Veuillez trouver en pièce-jointe le rapport sur le {if:target.type=="Transfer"}dépôt{endif}{if:target.type=="File"}fichier{endif}{if:target.type=="Recipient"}destinataire{endif} n°{target.id}.
</p>

<p>Cordialement,<br/>
{cfg:site_name}</p>
