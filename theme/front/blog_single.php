<style>
	.blog-detail-section {
      padding: 100px 0 100px 0;
		background: white;

      .blog-detail-grid {
        display: flex;
        gap: 50px;
      }

      .blog-detail-main {
        flex: 1.4;

        h1 {
          font-family: var(--subtext), sans-serif;
          font-size: clamp(1.6rem, 4vw, 2rem);
          font-weight: 900;
          line-height: 1.2;
          color: var(--colors);
          margin-bottom: 25px;
          letter-spacing: -0.5px;
        }

        .blog-detail-cover {
          position: relative;
          height: 440px;
          width: 100%;
          border-radius: 8px;
          overflow: hidden;
          margin-bottom: 20px;
          border: 1.5px solid rgba(37, 211, 102, 0.15);

          img {
            width: 100%;
            height: 100%;
            object-fit: cover;
          }
        }

        .blog-detail-meta {
          display: flex;
          flex-wrap: wrap;
          gap: 25px;
          padding: 15px 0;
          border-bottom: 1px solid rgba(255, 255, 255, 0.08);
          margin-bottom: 30px;

          .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.76rem;
            font-weight: 700;
            color: var(--subtext);
            text-transform: uppercase;
            letter-spacing: 0.5px;

            i {
              color: var(--colors);
              font-size: 13px;
            }
          }
        }

        .blog-detail-content {
          color: var(--subtext);
          font-size: 0.98rem;
          line-height: 1.75;
			display: flex;
			flex-direction: column;
			justify-content: start;
			align-items: start;
			gap: 1rem;

			ul {
				padding-left: 1rem;
			}

		  strong {
			  color: var(--colors);
		  }
			

          p {
            margin-bottom: 25px;
          }

          blockquote {
            border-left: 4px solid var(--colors);
            padding: 15px 25px;
            background-color: rgba(255, 95, 0, 0.04);
            border-radius: 4px;
            margin: 30px 0;
            font-style: italic;
            color: #FFFFFF;
            font-size: 1.05rem;
          }
        }
      }

      .blog-detail-sidebar {
        flex: 0.6;
        min-width: 360px;

        .sidebar-widget {
          background-color: white;
          border-radius: 8px;
          padding: 30px 24px;
          position: sticky;
          top: 120px;

          h3 {
            font-size: 1.2rem;
            color: var(--colors);
            margin-bottom: 25px;
            letter-spacing: 0.5px;
            border-bottom: 1.5px solid rgba(255, 95, 0, 0.15);
            padding-bottom: 10px;
          }

          .latest-articles-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
          }

          .latest-article-item {
            display: flex;
            gap: 15px;
            align-items: center;
            text-decoration: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding-bottom: 15px;

            &:last-child {
              border-bottom: none;
              padding-bottom: 0;
            }

            .thumb-wrapper {
              width: 80px;
              height: 60px;
              border-radius: 4px;
              overflow: hidden;
              flex-shrink: 0;
              border: 1px solid rgba(255, 255, 255, 0.08);

              img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.3s ease;
              }
            }

            .item-details {
              display: flex;
              flex-direction: column;
              gap: 4px;

              h4 {
                font-family: var(--subtext), sans-serif;
                font-size: 0.8rem;
                font-weight: 700;
                color: black;
                line-height: 1.35;
                letter-spacing: -0.2px;
                transition: color 0.3s ease;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                overflow: hidden;
              }

              div {
                font-size: 0.68rem;
                color: rgba(0, 0, 0, 0.5);
                display: -webkit-box;
                -webkit-line-clamp: 1;
                -webkit-box-orient: vertical;
                overflow: hidden;
              }
            }

            &:hover {
              .thumb-wrapper img {
                transform: scale(1.08);
              }
              .item-details h4 {
                color: var(--colors);
              }
            }
          }
        }
      }
    }
    @media (max-width: 1024px) {
      .blog-detail-section {
        .blog-detail-grid {
          flex-direction: column;
          gap: 40px;
        }

        .blog-detail-sidebar {
          width: 100%;
          min-width: unset;

          .sidebar-widget {
            position: static;
          }
        }
      }
    }
    @media (max-width: 768px) {

      .blog-detail-section {
        padding: 120px 0 80px 0;

        .blog-detail-main {
          h1 {
            font-size: 1.4rem;
          }

          .blog-detail-cover {
            height: 280px;
          }
        }
      }
    }
</style>

  <section class="blog-detail-section">
    <div class="container-global">
      <div class="blog-detail-grid">
        <main class="blog-detail-main">
          <h1><?= $data->result->title ?></h1>
          
          <div class="blog-detail-cover">
            <img src="<?= $data->result->img_cover_url ?>" alt="Sunset Temple Bali Landmarks">
          </div>

          <div class="blog-detail-meta">
            <div class="meta-item">
              <i class="fa-regular fa-user"></i>
              <span><?=  $data->web->site_name ?></span>
            </div>
            <div class="meta-item">
              <i class="fa-regular fa-calendar"></i>
              <span><?= date('d M Y', strtotime($data->result->created_at)) ?></span>
            </div>
            <div class="meta-item">
              <i class="fa-solid fa-book-open"></i>
              <span>Blog & Article</span>
            </div>
          </div>

          <div class="blog-detail-content">
           	<?= $data->result->content ?>
          </div>
        </main>

        <aside class="blog-detail-sidebar">

			<?php $func->sidebar('mainblog'); ?>
          
        </aside>
      </div>
    </div>
  </section>