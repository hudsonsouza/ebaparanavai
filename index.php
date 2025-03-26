<!DOCTYPE html>  
<html lang="pt-BR">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>1º EBA Paranavaí 2025</title>  
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">  
    <script src="https://cdn.tailwindcss.com"></script>  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>  
    <link rel="stylesheet" href="stilo1.css">  
</head>  
<body>  
    <!-- Header -->  
    <header class="header-fixed">  
        <div class="container mx-auto px-4">  
            <div class="flex justify-between items-center py-4">  
                <div class="flex items-center">  
                    <img src="/api/placeholder/150/50" alt="Logo EBA Paranavaí" class="h-8">  
                </div>  
                <!-- Desktop Menu -->  
                <nav class="hidden md:flex space-x-4">  
                    <a href="#inicio" class="nav-link">Início</a>  
                    <a href="#sobre" class="nav-link">Sobre</a>  
                    <a href="#programacao" class="nav-link">Programação</a>  
                    <a href="#shows" class="nav-link">Shows</a>  
                    <a href="#inscricao" class="nav-link">Inscrição</a>  
                    <a href="#participantes" class="nav-link">Participantes</a>  
                    <a href="#diretoria" class="nav-link">Diretoria</a>  
                    <a href="#hoteis" class="nav-link">Hotéis</a>  
                    <a href="#contato" class="nav-link">Contato</a>  
                </nav>  
                <!-- Mobile Menu Button -->  
                <button id="mobile-menu-button" class="md:hidden">  
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">  
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>  
                    </svg>  
                </button>  
            </div>  
            <!-- Mobile Menu -->  
            <div id="mobile-menu" class="hidden md:hidden">  
                <div class="px-2 pt-2 pb-3 space-y-1">  
                    <a href="#inicio" class="nav-link-mobile">Início</a>  
                    <a href="#sobre" class="nav-link-mobile">Sobre</a>  
                    <a href="#programacao" class="nav-link-mobile">Programação</a>  
                    <a href="#shows" class="nav-link-mobile">Shows</a>  
                    <a href="#inscricao" class="nav-link-mobile">Inscrição</a>  
                    <a href="#participantes" class="nav-link-mobile">Participantes</a>  
                    <a href="#diretoria" class="nav-link-mobile">Diretoria</a>  
                    <a href="#hoteis" class="nav-link-mobile">Hotéis</a>  
                    <a href="#contato" class="nav-link-mobile">Contato</a>  
                </div>  
            </div>  
        </div>  
    </header>  

    <!-- Banner Principal -->  
    <section id="inicio" class="banner flex items-center justify-center text-white">  
        <div class="container mx-auto px-4 text-center">  
            <h1 class="text-5xl md:text-7xl font-bold mb-6">1º EBA Paranavaí 2025</h1>  
            <p class="text-xl md:text-2xl mb-8">Encontro Bodes do Asfalto</p>  
            <p class="text-lg md:text-xl mb-12">Paranavaí-PR, 12 a 14 de Setembro de 2025</p>  
            <a href="#inscricao" class="bg-yellow-500 text-black py-3 px-8 rounded-full text-lg font-bold hover:bg-yellow-400 transition duration-300">Inscreva-se Agora</a>  
        </div>  
    </section>  
    <!-- Contagem Regressiva -->  
    <section class="py-12 bg-gray-900 text-white">  
        <div class="container mx-auto px-4">  
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">  
                <div class="countdown-item">  
                    <div id="days" class="countdown-number">00</div>  
                    <div class="countdown-label">Dias</div>  
                </div>  
                <div class="countdown-item">  
                    <div id="hours" class="countdown-number">00</div>  
                    <div class="countdown-label">Horas</div>  
                </div>  
                <div class="countdown-item">  
                    <div id="minutes" class="countdown-number">00</div>  
                    <div class="countdown-label">Minutos</div>  
                </div>  
                <div class="countdown-item">  
                    <div id="seconds" class="countdown-number">00</div>  
                    <div class="countdown-label">Segundos</div>  
                </div>  
            </div>  
        </div>  
    </section>  

    <!-- Área de Inscrição -->  
    <section id="inscricao" class="py-16 bg-yellow-500">  
        <div class="container mx-auto px-4">  
            <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-xl overflow-hidden">  
                <!-- Formulário de Inscrição -->  
                <div id="form-inscricao" class="p-8">  
                    <h2 class="text-4xl font-bold mb-6 text-center">Faça sua inscrição</h2>  
                    <p class="text-lg mb-8 text-center">Garanta sua participação no 1º EBA Paranavaí 2025 com condições especiais para inscrições antecipadas.</p>  
                    
                    <form id="inscricao-form" enctype="multipart/form-data" class="space-y-6">  
                        <div class="form-group">  
                            <label class="block mb-2 font-medium">Participante:</label>  
                            <div class="flex space-x-4">  
                                <div>  
                                    <input type="radio" id="bda" name="participante" value="b" required>  
                                    <label for="bda" class="ml-1">BDA</label>  
                                </div>  
                                
                                <div>  
                                    <input type="radio" id="cunhada" name="participante" value="c">  
                                    <label for="cunhada" class="ml-1">Cunhada</label>  
                                </div>  
                                
                                <div>  
                                    <input type="radio" id="irmao" name="participante" value="i">  
                                    <label for="irmao" class="ml-1">Irmão</label>  
                                </div>  
                                
                                <div>  
                                    <input type="radio" id="amigo" name="participante" value="a">  
                                    <label for="amigo" class="ml-1">Amigo</label>  
                                </div>  
                            </div>  
                        </div>  

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">  
                            <div>  
                                <label for="nome" class="block mb-2 font-medium">Nome completo</label>  
                                <input type="text" id="nome" name="nome" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" required>  
                            </div>  

                            <div>  
                                <label for="cunhada-nome" class="block mb-2 font-medium">Cunhada (se aplicável)</label>  
                                <input type="text" id="cunhada-nome" name="cunhada" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">  
                            </div>  

                            <div>  
                                <label for="email" class="block mb-2 font-medium">E-mail</label>  
                                <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" required>  
                            </div>  

                            <div>  
                                <label for="celular" class="block mb-2 font-medium">Celular</label>  
                                <input type="tel" id="celular" name="celular" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" required>  
                            </div>  
                            <div>  
                                <label for="cidade" class="block mb-2 font-medium">Cidade</label>  
                                <input type="text" id="cidade" name="cidade" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" required>  
                            </div>  

                            <div>  
                                <label for="uf" class="block mb-2 font-medium">UF</label>  
                                <select id="uf" name="uf" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" required>  
                                    <option value="AC">Acre</option>  
                                    <option value="AL">Alagoas</option>  
                                    <option value="AP">Amapá</option>  
                                    <option value="AM">Amazonas</option>  
                                    <option value="BA">Bahia</option>  
                                    <option value="CE">Ceará</option>  
                                    <option value="DF">Distrito Federal</option>  
                                    <option value="ES">Espírito Santo</option>  
                                    <option value="GO">Goiás</option>  
                                    <option value="MA">Maranhão</option>  
                                    <option value="MT">Mato Grosso</option>  
                                    <option value="MS">Mato Grosso do Sul</option>  
                                    <option value="MG">Minas Gerais</option>  
                                    <option value="PA">Pará</option>  
                                    <option value="PB">Paraíba</option>  
                                    <option value="PR" selected>Paraná</option>  
                                    <option value="PE">Pernambuco</option>  
                                    <option value="PI">Piauí</option>  
                                    <option value="RJ">Rio de Janeiro</option>  
                                    <option value="RN">Rio Grande do Norte</option>  
                                    <option value="RS">Rio Grande do Sul</option>  
                                    <option value="RO">Rondônia</option>  
                                    <option value="RR">Roraima</option>  
                                    <option value="SC">Santa Catarina</option>  
                                    <option value="SP">São Paulo</option>  
                                    <option value="SE">Sergipe</option>  
                                    <option value="TO">Tocantins</option>  
                                </select>  
                            </div>  
                        </div>  

                        <div>  
                            <label for="lote" class="block mb-2 font-medium">Lote:</label>  
                            <select id="lote" name="lote" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" required>  
                                <option value="200.00" data-text="LOTE 1 - R$ 200,00 (individual)">LOTE 1 - R$ 200,00 (individual)</option>  
                                <option value="350.00" data-text="LOTE 1 - R$ 350,00 (casal)">LOTE 1 - R$ 350,00 (casal)</option>  
                                <option value="250.00" data-text="LOTE 2 - R$ 250,00 (individual)">LOTE 2 - R$ 250,00 (individual)</option>  
                                <option value="450.00" data-text="LOTE 2 - R$ 450,00 (casal)">LOTE 2 - R$ 450,00 (casal)</option>  
                            </select>  
                        </div>  

                        <div>  
                            <label for="valor" class="block mb-2 font-medium">Valor (R$):</label>  
                            <input type="text" id="valor" name="valor" class="w-full p-3 border border-gray-300 rounded-md bg-gray-100" value="200.00" readonly>  
                            <input type="hidden" id="lote_texto" name="lote_texto" value="LOTE 1 - R$ 200,00 (individual)">  
                        </div>  

                        <div>  
                            <label for="comprovante" class="block mb-2 font-medium">Comprovante de Pagamento:</label>  
                            <input type="file" id="comprovante" name="comprovante" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500" accept="image/*,.pdf" required>  
                            <p class="text-sm text-gray-500 mt-1">Envie o comprovante do pagamento (imagem ou PDF)</p>  
                        </div>  

                        <div class="text-center">  
                            <button type="submit" class="bg-black hover:bg-gray-800 text-white font-bold py-3 px-8 rounded-full transition duration-300 inline-block">  
                                Confirmar inscrição  
                            </button>  
                        </div>  
                    </form>  
                </div>  

                <!-- Confirmação de Inscrição (inicialmente oculta) -->  
                <div id="confirmacao-inscricao" class="p-8 hidden">  
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">  
                        <p class="font-bold">Inscrição realizada com sucesso!</p>  
                        <p>Seu pagamento será confirmado em breve.</p>  
                    </div>  
                    <h2 class="text-2xl font-bold mb-4">Dados da Inscrição:</h2>  
                    <div class="overflow-x-auto">  
                        <table class="w-full border-collapse">  
                            <tr class="bg-gray-100">  
                                <th class="text-left py-2 px-4 border-b">Número de Inscrição:</th>  
                                <td class="py-2 px-4 border-b" id="inscricao-id"></td>  
                            </tr>  
                            <tr>  
                                <th class="text-left py-2 px-4 border-b">Participante:</th>  
                                <td class="py-2 px-4 border-b" id="inscricao-participante"></td>  
                            </tr>  
                            <tr class="bg-gray-100">  
                                <th class="text-left py-2 px-4 border-b">Nome:</th>  
                                <td class="py-2 px-4 border-b" id="inscricao-nome"></td>  
                            </tr>  
                            <tr>  
                                <th class="text-left py-2 px-4 border-b">Cunhada:</th>  
                                <td class="py-2 px-4 border-b" id="inscricao-cunhada"></td>  
                            </tr>  
                            <tr class="bg-gray-100">  
                                <th class="text-left py-2 px-4 border-b">Email:</th>  
                                <td class="py-2 px-4 border-b" id="inscricao-email"></td>  
                            </tr>  
                            <tr>  
                                <th class="text-left py-2 px-4 border-b">Celular:</th>  
                                <td class="py-2 px-4 border-b" id="inscricao-celular"></td>  
                            </tr>  
                            <tr class="bg-gray-100">  
                                <th class="text-left py-2 px-4 border-b">Cidade:</th>  
                                <td class="py-2 px-4 border-b" id="inscricao-cidade"></td>  
                            </tr>  
                            <tr>  
                                <th class="text-left py-2 px-4 border-b">UF:</th>  
                                <td class="py-2 px-4 border-b" id="inscricao-uf"></td>  
                            </tr>  
                            <tr class="bg-gray-100">  
                                <th class="text-left py-2 px-4 border-b">Lote:</th>  
                                <td class="py-2 px-4 border-b" id="inscricao-lote"></td>  
                            </tr>  
                            <tr>  
                                <th class="text-left py-2 px-4 border-b">Valor:</th>  
                                <td class="py-2 px-4 border-b" id="inscricao-valor"></td>  
                            </tr>  
                        </table>  
                    </div>  

                    <div class="text-center mt-8">  
                        <button id="nova-inscricao" class="bg-black hover:bg-gray-800 text-white font-bold py-3 px-8 rounded-full transition duration-300 inline-block">  
                            Fazer nova inscrição  
                        </button>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </section>   

    <!-- Participantes Inscritos -->  
    <section id="participantes" class="py-16 bg-white">  
        <div class="container mx-auto px-4">  
            <div class="text-center mb-12">  
                <h2 class="text-4xl font-bold mb-4">Participantes Inscritos</h2>  
                <div class="w-24 h-1 bg-yellow-500 mx-auto mb-6"></div>  
                <p class="text-lg max-w-3xl mx-auto">Confira abaixo a lista de participantes já inscritos no evento.</p>  
            </div>  
            
            <div class="overflow-x-auto bg-white rounded-lg shadow-lg">  
            <div class="p-4 flex justify-between items-center">  
            <div>  
                <span class="mr-2 font-medium">Legenda:</span>  
                <span class="inline-block bg-yellow-300 text-yellow-800 text-xs font-medium px-2 py-1 rounded mr-2">Pendente</span>  
                <span class="inline-block bg-green-500 text-white text-xs font-medium px-2 py-1 rounded mr-2">Aprovado</span>  
                <span class="inline-block bg-red-500 text-white text-xs font-medium px-2 py-1 rounded">Cancelado</span>  
            </div>  
            <button id="atualizar-lista" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center text-sm transition-colors">  
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />  
                </svg>  
                Atualizar  
            </button>  
            </div>   
                <table class="min-w-full divide-y divide-gray-200">  
                    <thead class="bg-gray-100">  
                        <tr>  
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">  
                                Num. Inscrição  
                            </th>  
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">  
                                Participante  
                            </th>  
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">  
                                Nome  
                            </th>  
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">  
                                Cunhada  
                            </th>  
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">  
                                Cidade/UF  
                            </th>  
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">  
                                Lote  
                            </th>  
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">  
                                Situação  
                            </th>  
                        </tr>  
                    </thead>  
                    <tbody id="lista-inscricoes" class="bg-white divide-y divide-gray-200">  
                        <tr>  
                            <td colspan="7" class="px-6 py-4 text-center text-sm text-gray-500">  
                                Carregando inscrições...  
                            </td>  
                        </tr>  
                    </tbody>  
                </table>  
            </div>  
        </div>  
    </section> 


    <!-- Contato -->  
    <section id="contato" class="py-16 bg-black text-white">  
        <div class="container mx-auto px-4">  
            <div class="text-center mb-12">  
                <h2 class="section-title">Contato</h2>  
                <div class="section-divider"></div>  
                <p class="text-lg max-w-3xl mx-auto">Entre em contato conosco para mais informações</p>  
            </div>  
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">  
                <!-- Informações de Contato -->  
                <div class="space-y-6">  
                    <div class="contact-info">  
                        <i class="fas fa-map-marker-alt contact-icon"></i>  
                        <div>  
                            <h3 class="text-xl font-bold mb-2">Localização</h3>  
                            <p>Parque de Exposições de Paranavaí</p>  
                            <p>Rua das Exposições, 1000</p>  
                            <p>Paranavaí - PR</p>  
                        </div>  
                    </div>  
                    <div class="contact-info">  
                        <i class="fas fa-phone contact-icon"></i>  
                        <div>  
                            <h3 class="text-xl font-bold mb-2">Telefones</h3>  
                            <p>(44) 99999-8888</p>  
                            <p>(44) 99999-7777</p>  
                        </div>  
                    </div>  
                    <div class="contact-info">  
                        <i class="fas fa-envelope contact-icon"></i>  
                        <div>  
                            <h3 class="text-xl font-bold mb-2">E-mail</h3>  
                            <p>bda.paranavai@hudsonss.com.br</p>  
                        </div>  
                    </div>  
                    <div class="contact-info">  
                        <i class="fas fa-clock contact-icon"></i>  
                        <div>  
                            <h3 class="text-xl font-bold mb-2">Horário do Evento</h3>  
                            <p>12 a 14 de Setembro de 2025</p>  
                            <p>Das 8h às 23h</p>  
                        </div>  
                    </div>  
                </div>  
                <!-- Formulário de Contato -->  
                <form id="contact-form" class="space-y-6">  
                    <div>  
                        <label for="contact-name" class="block mb-2 font-medium">Nome</label>  
                        <input type="text" id="contact-name" name="name" class="w-full p-3 border border-gray-700 bg-gray-900 rounded-md text-white" required>  
                    </div>  
                    <div>  
                        <label for="contact-email" class="block mb-2 font-medium">E-mail</label>  
                        <input type="email" id="contact-email" name="email" class="w-full p-3 border border-gray-700 bg-gray-900 rounded-md text-white" required>  
                    </div>  
                    <div>  
                        <label for="contact-subject" class="block mb-2 font-medium">Assunto</label>  
                        <input type="text" id="contact-subject" name="subject" class="w-full p-3 border border-gray-700 bg-gray-900 rounded-md text-white" required>  
                    </div>  
                    <div>  
                        <label for="contact-message" class="block mb-2 font-medium">Mensagem</label>  
                        <textarea id="contact-message" name="message" rows="5" class="w-full p-3 border border-gray-700 bg-gray-900 rounded-md text-white" required></textarea>  
                    </div>  
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-400 text-black font-bold py-3 px-8 rounded-full transition duration-300">  
                        Enviar Mensagem  
                    </button>  
                </form>  
            </div>  
        </div>  
    </section>  

    <!-- Footer -->  
    <footer class="bg-black text-white py-8">  
        <div class="container mx-auto px-4">  
            <div class="text-center">  
                <p class="mb-4">1º EBA Paranavaí 2025</p>  
                <div class="flex justify-center space-x-4 mb-4">  
                    <a href="#" class="hover:text-yellow-500 transition-colors">  
                        <i class="fab fa-facebook-f"></i>  
                    </a>  
                    <a href="#" class="hover:text-yellow-500 transition-colors">  
                        <i class="fab fa-instagram"></i>  
                    </a>  
                    <a href="#" class="hover:text-yellow-500 transition-colors">  
                        <i class="fab fa-whatsapp"></i>  
                    </a>  
                </div>  
                <p>&copy; 2025 EBA Paranavaí. Todos os direitos reservados.</p>  
            </div>  
        </div>  
    </footer>  


    <!-- Scripts -->  
    <script>  
        // Mobile Menu Toggle  
        const mobileMenuButton = document.getElementById('mobile-menu-button');  
        const mobileMenu = document.getElementById('mobile-menu');  
        
        mobileMenuButton.addEventListener('click', () => {  
            mobileMenu.classList.toggle('hidden');  
        });  

        // Countdown Timer  
        function updateCountdown() {  
            const eventDate = new Date('2025-08-15T00:00:00').getTime();  
            const now = new Date().getTime();  
            const distance = eventDate - now;  

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));  
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));  
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));  
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);  

            document.getElementById('days').textContent = String(days).padStart(2, '0');  
            document.getElementById('hours').textContent = String(hours).padStart(2, '0');  
            document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');  
            document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');  
        }  

        setInterval(updateCountdown, 1000);  
        updateCountdown();  

        // Form Handling  
        const inscricaoForm = document.getElementById('inscricao-form');  
        const confirmacaoInscricao = document.getElementById('confirmacao-inscricao');  
        const formInscricao = document.getElementById('form-inscricao');  
        const novaInscricaoBtn = document.getElementById('nova-inscricao');  

        // Máscara para o campo de celular  
        $(document).ready(function(){  
            $('#celular').mask('(00) 00000-0000');  
        });  

        // Atualizar valor conforme seleção do lote  
        document.getElementById('lote').addEventListener('change', function() {  
            const valorInput = document.getElementById('valor');  
            const loteTextoInput = document.getElementById('lote_texto');  
            const selectedOption = this.options[this.selectedIndex];  
            
            valorInput.value = this.value;  
            loteTextoInput.value = selectedOption.dataset.text;  
        });  

        inscricaoForm.addEventListener('submit', function(e) {  
    e.preventDefault();  
    
    // Mostrar loading ou desabilitar o botão submit  
    const submitButton = this.querySelector('button[type="submit"]');  
    const originalText = submitButton.innerHTML;  
    submitButton.disabled = true;  
    submitButton.innerHTML = `  
        <svg class="animate-spin h-5 w-5 text-white inline mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">  
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>  
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>  
        </svg>  
        Processando...  
    `;  
    
    const formData = new FormData(this);  
    
    fetch('gravar_inscricao.php', {  
        method: 'POST',  
        body: formData  
    })  
    .then(response => {  
        if (!response.ok) {  
            throw new Error('Erro na resposta do servidor: ' + response.status);  
        }  
        return response.json();  
    })  
    .then(data => {  
        if (!data.success) {  
            throw new Error(data.error || 'Erro ao salvar inscrição');  
        }  

        // Preencher os campos da confirmação  
        document.getElementById('inscricao-id').textContent = data.id;  
        document.getElementById('inscricao-participante').textContent = data.participante;  
        document.getElementById('inscricao-nome').textContent = data.nome;  
        document.getElementById('inscricao-cunhada').textContent = data.cunhada || '-';  
        document.getElementById('inscricao-email').textContent = data.email;  
        document.getElementById('inscricao-celular').textContent = data.celular;  
        document.getElementById('inscricao-cidade').textContent = data.cidade;  
        document.getElementById('inscricao-uf').textContent = data.uf;  
        document.getElementById('inscricao-lote').textContent = data.lote;  
        document.getElementById('inscricao-valor').textContent = `R$ ${data.valor}`;  

        // Mostrar confirmação  
        formInscricao.classList.add('hidden');  
        confirmacaoInscricao.classList.remove('hidden');  

        // Atualizar lista de inscrições  
        if (typeof carregarInscricoes === 'function') {  
            carregarInscricoes();  
        }  
    })  
    .catch(error => {  
        console.error('Erro:', error);  
        alert('Erro ao processar inscrição: ' + error.message);  
    })  
    .finally(() => {  
        // Restaurar botão  
        submitButton.disabled = false;  
        submitButton.innerHTML = originalText;  
    });  
});      

        novaInscricaoBtn.addEventListener('click', function() {  
            inscricaoForm.reset();  
            formInscricao.classList.remove('hidden');  
            confirmacaoInscricao.classList.add('hidden');  
        });  

        // Contact Form  
        const contactForm = document.getElementById('contact-form');  
        
        contactForm.addEventListener('submit', function(e) {  
            e.preventDefault();  
            alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');  
            this.reset();  
        });  

        // Função global para carregar inscrições  
        function carregarInscricoes() {  
    const listaElement = document.getElementById('lista-inscricoes');  
    
    // Mostrar loading  
    listaElement.innerHTML = `  
        <tr>  
            <td colspan="7" class="px-6 py-4 text-center">  
                <div class="flex justify-center items-center">  
                    <svg class="animate-spin h-5 w-5 text-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">  
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>  
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>  
                    </svg>  
                    Carregando inscrições...  
                </div>  
            </td>  
        </tr>  
    `;  

    // Fazer a requisição  
    fetch('listar_inscricoes.php')  
        .then(response => {  
            if (!response.ok) {  
                throw new Error('Erro na resposta do servidor: ' + response.status);  
            }  
            return response.json();  
        })  
        .then(data => {  
            if (!data.success) {  
                throw new Error(data.error || 'Erro ao carregar inscrições');  
            }  

            if (!data.inscricoes || data.inscricoes.length === 0) {  
                listaElement.innerHTML = `  
                    <tr>  
                        <td colspan="7" class="px-6 py-4 text-center text-gray-500">  
                            Nenhuma inscrição encontrada.  
                        </td>  
                    </tr>  
                `;  
                return;  
            }  

            const html = data.inscricoes.map(inscricao => {  
                let situacaoClass;  
                switch (inscricao.situacao_codigo) {  
                    case 'p':  
                        situacaoClass = 'bg-yellow-300 text-yellow-800';  
                        break;  
                    case 'a':  
                        situacaoClass = 'bg-green-500 text-white';  
                        break;  
                    case 'c':  
                        situacaoClass = 'bg-red-500 text-white';  
                        break;  
                    default:  
                        situacaoClass = 'bg-gray-300 text-gray-800';  
                }  

                return `  
                    <tr class="hover:bg-gray-50">  
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">  
                            ${inscricao.id}  
                        </td>  
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">  
                            ${inscricao.participante_texto}  
                        </td>  
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">  
                            ${inscricao.nome}  
                        </td>  
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">  
                            ${inscricao.cunhada || '-'}  
                        </td>  
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">  
                            ${inscricao.cidade}/${inscricao.uf}  
                        </td>  
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">  
                            ${inscricao.lote_texto}  
                        </td>  
                        <td class="px-6 py-4 whitespace-nowrap">  
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-semibold rounded-full ${situacaoClass}">  
                                ${inscricao.situacao}  
                            </span>  
                        </td>  
                    </tr>  
                `;  
            }).join('');  

            listaElement.innerHTML = html;  
        })  
        .catch(error => {  
            console.error('Erro ao carregar inscrições:', error);  
            listaElement.innerHTML = `  
                <tr>  
                    <td colspan="7" class="px-6 py-4 text-center text-red-500">  
                        Erro ao carregar inscrições: ${error.message}  
                    </td>  
                </tr>  
            `;  
        });  
}  

// Carregar inscrições quando a página carregar  
document.addEventListener('DOMContentLoaded', carregarInscricoes);  

// Configurar botão de atualização  
const btnAtualizar = document.getElementById('atualizar-lista');  
if (btnAtualizar) {  
    btnAtualizar.addEventListener('click', carregarInscricoes);  
}   
    
    </script>  
</body>  
</html>                                                                                                          