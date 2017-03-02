<?php
  include 'layout/_functions.php'
?>

<?php
  $page_title = "Perguntas | Dados Abertos";
  $current_page = "perguntas";
?>


<?php
  include 'layout/_head.php';
?>
  <body>

    <?php
        include 'layout/_header.php';
    ?>


    <main>
      <section id="perguntas">
        <div class="container">
          <!-- Perguntas Frequentes -->
          <div class="row">
            <div class="col-sm-12 col-md-12" >
              <h4>Perguntas Frequentes</h4>
              <dl>
                <dt>O que é open data? O que é isso dos dados abertos?</dt>
                <dd>
                  <p>Os dados abertos (ou _open data_ em inglês) são dados que podem ser livremente usados, reutilizados e redistribuídos por qualquer pessoa - sujeitos, no máximo, à exigência de atribuição da fonte e partilha segundo os mesmos termos.</p>
                  <p>Quando falamos de dados, estamos a referir-nos a conjuntos de informação estruturada; na gíria técnica, referimo-nos a _datasets_ ou bases de dados. São bons exemplos os censos populacionais, registos meteorológicos, registos de empresas ou transcrições parlamentares.</p>
                  <p>Os Estados, Parlamentos e inúmeras instituições públicas produzem conjuntos de dados de enorme valor. Na maior parte dos casos, tratam-se de informação pública destinada a ser disseminada. No entanto, muitas vezes os termos do acesso a esses dados são pouco claros ou incluem restrições que chocam com os princípios do interesse público e da transparência elementar. Daí a necessidade de uma definição clara e objetiva, proposta inicialmente pela Open Knowledge International no OpenDefinition.org, de princípios que possam assegurar o direito do acesso à informação pública. É essa a agenda <i>open data</i>.</p>
                  <p>A Definição Aberta descreve em pormenor todos os princípios que um conjunto de dados deve cumprir para que possa ser considerado aberto. Em modo de resumo, os princípios mais importantes a cumprir são:</p>
                  <p><strong>Disponibilidade e Acesso:</strong> os dados devem estar disponíveis como um todo, preferencialmente de forma gratuita ou a um custo razoável de reprodução, e preferencialmente possíveis de descarregar pela internet. Os dados devem também estar disponíveis de uma forma conveniente e modificável.</p>
                  <p><strong>Reutilização e Redistribuição:</strong> os dados devem ser fornecidos sob termos que permitam a reutilização e a redistribuição, e também a articulação com outros conjuntos de dados, sem exceção.</p>
                  <p><strong>Participação Universal:</strong> o uso, reutilização e redistribuição deve ser aberta a todos - não deve haver discriminação por áreas de especialização ou contra pessoas ou grupos. São disto exemplo as restrições de uso que impeçam o uso comercial, ou restrições dos fins em que os dados podem ser aplicados -- por exemplo, apenas em contextos educativos ou investigação académica. Tais restrições impedem que os dados em questão possam ser considerados dados abertos.</p>
                  <p>Ao adotar uma licença aberta para os seus dados, qualquer entidade ou instituição pode assim confirmar ao público a sua explícita vontade de que esses dados se tornem matéria-prima de inúmeras potenciais iniciativas por parte da sociedade civil.</p>
                </dd>

                <dt>O que são licenças? Como posso disponibilizar os meus dados com uma licença aberta?</dt>
                  <p>Uma licença, como o nome sugere, é um conjunto de autorizações que o proprietário dos dados proporciona explicitamente a quem a eles acede.</p>
                  <p>Temos uma <a href="licencas.php">página dedicada às várias licenças abertas</a> e como escolher a melhor para cada contexto.</p>
                <dd>

                </dd>

                <dt>A minha instituição disponibiliza já os dados gratuitamente na Internet. Posso dizer que são dados abertos?</dt>
                <dd>
                  <p>Gratuitidade não significa abertura. É fundamental que sejam explicitamente garantidos os princípios acima mencionados:</p>
                  <ul>
                    <li>Deve ser permitida a reutilização e redistribuição dos dados. Qualquer restrição à sua edição ou manipulação impede que sejam considerados abertos.</li>
                    <li>Não pode haver restrições a áreas específicas. Por exemplo, um dataset não é aberto quando é apenas permitido o uso pessoal, não-comercial e/ou académico.</li>
                    <li>É preciso que estejam disponíveis em formatos abertos, por forma a não obrigar o público a utilizar ferramentas de software específicas para a eles poder aceder.</li>
                  </ul>
                </dd>

                <dt>O que é que os dados abertos permitem fazer?</dt>
                <dd>
                  <p>Tudo! Há inúmeros áreas nas quais podemos usar dados abertos para melhorar a vida das pessoa e que  como por exemplo para a transparência democrática, colaboração e participação cívica, melhoria ou criação de produtos e serviços públicos ou privados. Os dados abertos podem servir de matéria prima, sem restrições, para novos projetos e para a criação de novo conhecimento, avanços na sociedade e criação de valor.</p>
                  <ul>
                    <li>identificação de problemas sistemáticos ou pontuais na sociedade, ou simplesmente optimização desta potenciação de projectos fornecendo matéria prima para estes (Dados), sejam projectos comunitários abertos, projectos privados ou projectos académicos, os quais trazem valor á sociedade (transparencia é um termo associado a anticorrupçao! nao usar)</li>
                    <li>transparência governativa  open government - ajudar os cidadãos a compreender as decisões e accoes dos seus governantes?</li>
                    <li>potenciar avanços científicos que não seriam possíveis sem a abertura e transferência de informação.</li>
                    <li>Apelar a participação do cidadão. Aplicaçõesem que todos nos contribuímos.</li>
                    <li>conhecimento coletivo</li>
                    <li>colaboração</li>
                    <li>Impacto na sociedade. Aumentar a consciênciado cidadão perante situações publicas porque eles agora contem informação que nãosabia de antes logo pode tomar decisões mais conscientes</li>
                  </ul>

                </dd>

                <dt>Que bons exemplos existem de reutilização de dados abertos?</dt>
                <dd>

                </dd>

                <dt>E em Portugal?</dt>
                <dd>

                </dd>

                <dt>Porque existe tanta informação fechada?</dt>
                <dd>
                  <p>Apesar de todo este potencial, as fontes de dados abertos são ainda escassas. Podemos apontar duas razões principais:</p>
                  <ul> 
                    <li>O desconhecimento da existência das licenças abertas, e o uso de termos de utilização padrão que, por vezes sem intenção por parte das entidades, colocam restrições que tornam os seus dados efetivamente fechados.</li>
                    <li>A falta de incentivo à abertura por parte das entidades detentoras da informação. Para resolver este problema, é necessária a implementação de medidas claras que incentivem a abertura, bem como a consciencialização da sociedade do valor dos dados abertos.</li>
                  </ul>
                </dd>

                <dt>Porque é que ainda não é tudo aberto? Quais são os entraves?</dt>
                <dd>
                  <ul>
                    <li>falta de incentivo à abertura (câmaras, academia), ver pergunta sobre o que custa</li>
                    <li>estipulação de políticas sem implementação efectiva (ex. Parlamento)</li>
                    <li>open washing</li>
                  </ul>

                </dd>

                <dt>Qual é o esforço necessário para libertar um conjunto de dados?</dt>
                <dd>
                  <p>Basta apenas assegurar a documentação adequada e actualização necessária, bem como garantir que os dados não levantam questões de privacidade.  Se isto parecer confuso ou difícil, é só entrar em contacto.</p>
                </dd>

                <dt>O que são formatos abertos? Quais formatos devo utilizar/evitar?</dt>
                <dd>

                </dd>

                <dt>Como posso saber mais pormenores?</dt>
                <dd>
                  <p><a href="http://opendatahandbook.org/guide/en/">Open Data Handbook</a></p>

                </dd>

              </dl>
            </div>
          </div>



        </div>
      </section>
    </main>


<?php
  include 'layout/_footer.php';
?>