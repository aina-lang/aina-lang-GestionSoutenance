<h4 style="text-align:center;">PROCES VERBAL</h4>

@switch($soutenance->etudiants->niveau)
    @case('Licence 1')
        <h4 style="text-align:center;">SOUTENANCE DE FIN D’ETUDES POUR L’OBTENTION DU DIPLOME DE LICENCE PROFESSIONNELLE</h4>
    @break

    @case('Licence 2')
        <h4 style="text-align:center;">SOUTENANCE DE FIN D’ETUDES POUR L’OBTENTION DU DIPLOME DE LICENCE PROFESSIONNELLE</h4>
    @break

    @case('Licence 3')
        <h4 style="text-align:center;">SOUTENANCE DE FIN D’ETUDES POUR L’OBTENTION DU DIPLOME DE LICENCE PROFESSIONNELLE</h4>
    @break

    @case('Master 1')
        <h4 style="text-align:center;">SOUTENANCE DE FIN D’ETUDES POUR L’OBTENTION DU DIPLOME DE MASTER 1</h4>
    @break

    @case('Master 2')
        <h4 style="text-align:center;">SOUTENANCE DE FIN D’ETUDES POUR L’OBTENTION DU DIPLOME DE MASTER 2</h4>
    @break

    @default
@endswitch
<p style="text-align:center;"><span style="font-weight:bolder;"> Mention : Informatique </span> </p>
<p style="text-align:center;"><span style="font-weight:bolder;">Parcours : {{ $soutenance->etudiants->parcours }}</span>
</p>
<p> {{ $soutenance->etudiants->nom . ' ' . $soutenance->etudiants->prenom }}</p>



@switch($soutenance->etudiants->niveau)
    @case('Licence 1')
    <p>a soutenu publiquement son mémoire de fin d’études pour l’obtention du diplôme de Licence professionnelle</p>
    @break

    @case('Licence 2')
    <p>a soutenu publiquement son mémoire de fin d’études pour l’obtention du diplôme de Licence professionnelle</p>
    @break

    @case('Licence 3')
    <p>a soutenu publiquement son mémoire de fin d’études pour l’obtention du diplôme de Licence professionnelle</p>
    @break

    @case('Master 1')
    <p>a soutenu publiquement son mémoire de fin d’études pour l’obtention du diplôme de master 1</p>
    @break

    @case('Master 2')
    <p>a soutenu publiquement son mémoire de fin d’études pour l’obtention du diplôme de master 2</p>

    @default
@endswitch
@switch($soutenance->note)
    @case(1)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (un sur
            vingt)</p>
    @break

    @case(2)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (deux sur
            vingt)</p>
    @break

    @case(3)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (trois sur
            vingt)</p>
    @break

    @case(4)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (quatre sur
            vingt)</p>
    @break

    @case(1.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (un virgule
            cinque sur vingt)</p>
    @break

    @case(2.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (deux
            virgule cinque sur vingt)</p>
    @break

    @case(3.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (trois
            virgule cinque sur vingt)</p>
    @break

    @case(4.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (quatre
            virgule cinque sur vingt)</p>
    @break

    @case(5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (cinque
            sur vingt)</p>
    @break

    @case(5.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (cinque
            virgule cinque sur vingt)</p>
    @break

    @case(6)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (six sur
            vingt)</p>
    @break

    @case(6.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (six
            virgule cinque sur vingt)</p>
    @break

    @case(7)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (sept sur
            vingt)</p>
    @break

    @case(7.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (sept
            virgule cinque sur vingt)</p>
    @break

    @case(8)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (huit sur
            vingt)</p>
    @break

    @case(8.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (huit
            virgule cinque sur vingt)</p>
    @break

    @case(9)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (neuf ,5
            sur vingt)</p>
    @break

    @case(9.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (neuf
            virgule cinque sur vingt)</p>
    @break

    @case(10)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (dix sur
            vingt)</p>
    @break

    @case(10.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (dix
            virgule cinque sur vingt)</p>
    @break

    @case(11)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (onze sur
            vingt)</p>
    @break

    @case(11.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (onze
            virgule cinque sur vingt)</p>
    @break

    @case(12)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (douze sur
            vingt)</p>
    @break

    @case(12.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (douze
            virgule cinque sur vingt)</p>
    @break

    @case(13)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (treize
            sur vingt)</p>
    @break

    @case(13.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (treize
            virgule cinque sur vingt)</p>
    @break

    @case(14)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (quatorze
            sur vingt)</p>
    @break

    @case(14.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (quatorze
            virgule cinque sur vingt)</p>
    @break

    @case(15)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (quinze
            sur vingt)</p>
    @break

    @case(15.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (quinze
            virgule cinque sur vingt)</p>
    @break

    @case(16)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (seize sur
            vingt)</p>
    @break

    @case(16.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (seize
            virgule cinque sur vingt)</p>
    @break

    @case(17)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (dix-sept
            sur vingt)</p>
    @break

    @case(17.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (dix-sept
            virgule cinque sur vingt)</p>
    @break

    @case(18)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (dix-huit
            sur vingt)</p>
    @break

    @case(18.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (dix-huit
            virgule cinque sur vingt)</p>
    @break

    @case(19)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (dix-neuf
            sur vingt)</p>
    @break

    @case(19.5)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (dix-neuf
            virgule cinque sur vingt)</p>
    @break

    @case(20)
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (vingt sur
            vingt)</p>
    @break

    @default
        <p>Après la délibération, la commission des membres du Jury a attribué la note de {{ $soutenance->note }}/20 (dix-neuf
            virgule cinque sur vingt)</p>
@endswitch

<p style="text-decoration: underline;display:block;">Membres du Jury</p>

<p><span style="font-weight:bolder;"> Président
        :</span>{{ $soutenance->presidents->civilites . ' ' . $soutenance->presidents->nom . ' ' . $soutenance->presidents->prenoms }}
</p>
<p><span style="font-weight:bolder;"> Examinateur
        :</span>{{ $soutenance->examinateurs->civilites . ' ' . $soutenance->examinateurs->nom . ' ' . $soutenance->examinateurs->prenoms }}
</p>
<p><span style="font-weight:bolder;"> Rapporteurs
        :</span>{{ $soutenance->rapporteur_ints->civilites . ' ' . $soutenance->rapporteur_ints->nom . ' ' . $soutenance->rapporteur_exts->prenoms }},{{ $soutenance->rapporteur_exts->civilites . ' ' . $soutenance->rapporteur_exts->nom . ' ' . $soutenance->rapporteur_exts->prenoms }}
</p>
