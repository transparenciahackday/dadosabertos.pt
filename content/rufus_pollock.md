Dêem-nos Dados em Bruto e Dêem-nos Já
=====================================

Algo que acho notável em muitos projetos de dados é a quantidade de esforço aplicado em desenvolver de visuais apelativos para o material.


Não é que esteja a criticar os visuais apelativos. Eles são importantes, pois proporcionam uma forma de muitos utilizadores chegarem ao material (e são muito úteis para demonstrar aos financiadores para onde o dinheiro foi). Mas visuais apelativos (VA de agora adiante) têm vários inconvenientes:
<ul>
<li>Assumem frequentemente o controlo completo e começam a ser uma restrição na forma como se retiram os dados do sistema. (O exemplo clássico disto é a página web dos Objetivos de Desenvolvimento do Milénio que está cheio de AJAX bonitinho que na realidade torna muito difícil retirar todos os dados do sistema — por favor, por favor, dêem-me um velho e simples arquivo CSV e um velho e simples URL).</li>
<li>Mesmo que os VA na realidade não fiquem no caminho, tiram o dinheiro do trabalho central de obter os dados de uma forma simples e...</li>
<li>Tendem a ficar obsoletos rapidamente. Pensem em como uma página web desenhada há cinco anos atrás se parece hoje (olá, CSS). Depois pensem no que irá acontecer ao trabalho estiloso de AJAX+CSS que acabaram de fazer. Por contraste, texto ASCII, ficheiros CSV e o velho e simples SQL (pelo menos se for feito com algum respeito pelo padrão ASCII) não ficam obsoletos — permanecem para sempre em grande estilo.</li>
<li>Refletem um ponto de vista centrado na interface em vez de centrado nos dados. O que está errado. Muitas interfaces podem ser escritas a partir desses dados (e não apenas uma interface web) e é provável (se não certo) que uma melhor interface será escrita por outra pessoa (embora, talvez, com algum atraso). Além disso, os dados podem ser usados para muitos outros fins que não só uma leitura estrita. Resumindo: **Os dados são o principal, a interface é secundária.**</li>
<li>Levando esta questão mais longe, em muitos projetos, porque a interface é visto como o mais importante, os dados não são disponibilizados até a interface estar desenvolvido. Isto pode gerar atrasos significativos na obtenção de acesso a esses dados.
</li>
</ul>
Quando estes argumentos são usados, muitas vezes as pessoas respondem: "Mas ninguém quer os dados em bruto, em toda a sua complexidade. Nós precisamos de os limpar e de os apresentar." Ao que devemos responder:

####*"Não, nós queremos dados em bruto e queremos os dados já"*


*Este artigo, escrito por Rufus Pollock, foi publicado originalmente em [Give Us the Data Raw, and Give it to Us Now](https://blog.okfn.org/2007/11/07/give-us-the-data-raw-and-give-it-to-us-now/), a 7 de novembro de 2007, e traduzido para português por Joana Ventura e revisto por Ricardo Pinho e Luís Oliveira.*



