<?php

// Composer: "fzaninotto/faker": "v1.3.0"

class JobsTableSeeder extends Seeder {

	public function run()
	{
        $jobs = [
            [
                'title'=>'Desenvolvedor Ruby on Rails',
                'description'=>'A Contratado.Me está mudando o jeito com que empresas contratam profissionais de TI de alta qualidade no Brasil.Estamos em uma fase de crescimento acelerada e precisamos da sua ajuda. Vem ajudar crescer uma coisa que já está melhorando a vida para muitos devs em São Paulo!',
                'location'=>'São Paulo/SP',
                'requirements'=>'- Experiência com desenvolvimento web usando ruby on rails - Ter experiência com desenvolvimento web de pelo menos 2 anos - Trabalhar bem html, css, java script e desenvolvimento / integração com apis - Experiência em desenvolvimento de APIs - Experiência em desenvolvimento de interfaces ricas, usando angular.js - Noções de AWS e seus serviços - Bons conhecimentos de base de dados relacional (sql server, mysql ou oracle) - Experiência em GIT - Se envolva no desenho técnico das soluções visando atender os objetivos de negócio a longo prazo - Ter fluência em métodos ágeis (XP e SCRUM) - Gostar de trabalhar em grupo e de se relacionar com as pessoas - Ser proativo, organizado e autodidata - Inglês técnico (para leitura de artigos e livros) DIFERENCIAIS - Curso superior completo em sistemas de informação, ciência da computação e afins - Conhecimento com testes automatizados - Conhecimento avançado de frameworks js (ex: angularjs, backbonejs, emberjs)',
                'type'=>'pj',
                'form'=>'attendance',
            ]
        ];

		foreach($jobs as $job)
		{
			Job::create($job);
		}
	}

}