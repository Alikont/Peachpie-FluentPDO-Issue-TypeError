CREATE TABLE [dbo].[manager](
	[id] [int] IDENTITY(23,1) NOT NULL,
	[role_id] [int] NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[login] [nvarchar](255) NOT NULL,
	[archived] [int] NOT NULL,
	CONSTRAINT [PK_manager_id] PRIMARY KEY CLUSTERED ( [id] ASC )
) ON [PRIMARY]

CREATE TABLE [dbo].[role] (
	[id] [int] IDENTITY(13,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[is_admin] [int] NOT NULL,
	[is_system] [int] NOT NULL,
	[is_default] [int] NOT NULL,
	[zone_id] [int] NOT NULL,
	CONSTRAINT [PK_role_id] PRIMARY KEY CLUSTERED ([id] ASC ) 
) ON [PRIMARY]

